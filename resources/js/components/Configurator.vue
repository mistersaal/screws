<template>

    <div :class="{'v-load': ! loaded}">

        <form action="" method="POST">
            <h3 class="title is-5">Саморезы</h3>
            <span class="label">Тип</span>
            <div class="field configurator-radio is-grouped is-grouped-multiline">
                <div class="control" v-for="(type, index) in config">
                    <input type="radio"
                           name="config"
                           :value="index"
                           :id="'config_' + index"
                           v-model.number="values.config"
                    >
                    <label :for="'config_' + index">
                        <span class="radio-dot"></span>
                        {{type}}
                    </label>
                </div>
            </div>
            <div class="field configurator-radio">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item-left">
                            <span class="icon is-medium has-text-info">
                                <i class="far fa-question-circle fa-lg"></i>
                            </span>
                            <span>Необходим другой тип саморезов?</span>
                        </div>
                        <div class="level-item-left">
                            <div class="control">
                                <input type="radio"
                                       name="config"
                                       :value="0"
                                       :id="'config_0'"
                                       v-model.number="values.config"
                                >
                                <label :for="'config_0'">
                                    Другое
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <template v-for="(type, index) in parameters">
                <template v-for="(parameter, name) in type">
                    <label :for="name" class="label" :class="{'is-hidden': hideField(index)}">{{name}}</label>
                    <div class="field is-grouped is-grouped-multiline"
                         :class="{
                            'is-hidden': hideField(index),
                            'configurator-radio': ! isInSelect(name)
                         }"
                    >
                        <div class="control" v-if="isInSelect(name)">
                            <div class="select" :class="{'is-selected': values[name] != -1}">
                                <select :name="name"
                                        :id="name"
                                        v-model.number="values[name]"
                                >
                                    <option disabled selected value="-1">-- Выбор --</option>
                                    <option :value="id" v-for="(option, id) in parameter">{{option}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="control" v-else v-for="(option, id) in parameter">
                            <input type="radio"
                                   :name="name"
                                   :id="name + '_' + id"
                                   :value="id"
                                   v-model.number="values[name]"
                            >
                            <label :for="name + '_' + id">
                                <span class="radio-dot"></span>
                                {{option}}
                            </label>
                        </div>
                    </div>
                </template>
            </template>
        </form>
    </div>
</template>

<script>
    import ConfiguratorOrderForm from "./ConfiguratorOrderForm";

    export default {
        name: "Configurator",
        components: {ConfiguratorOrderForm},
        data() {
            return {
                parameters: {
                    standard: {},
                    individual: {}
                },
                config: {},
                values: {},
                inSelect: [],
                loaded: false
            };
        },
        methods: {
            hideField(type) {
                return type === 'standard' && ! this.isNotStandard;
            },
            isInSelect(name) {
                return this.inSelect.indexOf(name) !== -1;
            }
        },
        created() {
            axios.get('/configurator/data')
            .then((response) => {
                let data = response.data;
                this.$set(this.values, 'config', -1);
                Object.keys(data.standard).forEach((key) => {
                    this.$set(this.values, key, -1);
                });
                Object.keys(data.individual).forEach((key) => {
                    this.$set(this.values, key, -1);
                });
                this.config = data.config;
                this.inSelect = data.inSelect;
                this.parameters.individual = data.individual;
                this.parameters.standard = data.standard;
                this.loaded = true;
            })
        },
        computed: {
            isNotStandard() {
                return this.values.config === 0;
            },
            isReady() {
                if (this.values.config === -1) return false;

                let def = Object.keys(this.parameters.individual).every((key) => {
                    return this.values[key] !== -1
                });
                if (! this.isNotStandard) {
                    return def;
                }

                let standard = Object.keys(this.parameters.standard).every((key) => {
                    return this.values[key] !== -1;
                });
                return def && standard;
            }
        }
    }
</script>
