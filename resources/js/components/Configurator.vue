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
            <template v-for="(type, index) in parameters">
                <template v-for="(parameter, name) in type">
                    <div class="field configurator-field"
                         :class="{
                            'is-slim': hideField(index),
                         }"
                    >
                        <label :for="name" class="label">{{name}}</label>
                        <div  :class="{
                                'field configurator-radio is-grouped is-grouped-multiline': ! isInSelect(name)
                            }">
                            <div class="control">
                                <div class="select" v-if="isInSelect(name)">
                                    <select :name="name"
                                            :id="name"
                                            v-model.number="values[name]"
                                    >
                                        <option disabled selected value="-1">-- Выбор --</option>
                                        <option :value="id" v-for="(option, id) in parameter">{{option}}</option>
                                    </select>
                                </div>
                                <template v-else v-for="(option, id) in parameter">
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
                                </template>
                            </div>
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
                    individual: {},
                    standard: {}
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
