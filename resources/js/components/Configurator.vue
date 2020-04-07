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
                        {{type.name}}
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
            <template v-for="(parameter, id) in parameters">
                <label :for="id" class="label" :class="{'is-hidden': hideField(id)}">{{parameter.name}}</label>
                <div class="field is-grouped is-grouped-multiline"
                     :class="{
                        'is-hidden': hideField(id),
                        'configurator-radio': ! isInSelect(id)
                     }"
                >
                    <div class="control" v-if="isInSelect(id)">
                        <div class="select" :class="{'is-selected': values[id] != -1}">
                            <select :name="id"
                                    :id="id"
                                    v-model.number="values[id]"
                            >
                                <option disabled selected value="-1">-- Выбор --</option>
                                <option :value="id" v-for="(option, id) in parameter.values">{{option}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="control" v-else v-for="(option, valueId) in parameter.values">
                        <input type="radio"
                               :name="id"
                               :id="id + '_' + valueId"
                               :value="valueId"
                               v-model.number="values[id]"
                        >
                        <label :for="id + '_' + valueId">
                            <span class="radio-dot"></span>
                            {{option}}
                        </label>
                    </div>
                </div>
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
                parameters: {},
                config: {},
                values: {},
                inSelect: [],
                loaded: false
            };
        },
        methods: {
            hideField(id) {
                return this.individual.indexOf(id) === -1 && ! this.isNotStandard;
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
                Object.keys(data.parameters).forEach((key) => {
                    this.$set(this.values, key, -1);
                });
                this.config = data.config;
                this.inSelect = data.inSelect;
                this.parameters = data.parameters;
                this.loaded = true;
            })
        },
        computed: {
            isNotStandard() {
                return this.values.config === 0;
            },
            isReady() {
                if (this.values.config === -1) return false;

                return Object.keys(this.parameters).every((key) => {
                    return this.values[key] !== -1 || this.hideField(key);
                });
            },
            individual() {
                if (this.values.config <= 0) {
                    return [];
                }
                return this.config[this.values.config].individual;
            }
        }
    }
</script>
