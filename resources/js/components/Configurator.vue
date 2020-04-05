<template>

    <div :class="{'v-load': ! loaded}">

        <form action="" method="POST">
            <h3 class="title is-5">Саморезы</h3>
            <span class="label">{{rus.config}}</span>
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
                        <label :for="name" class="label">{{rus[name]}}</label>
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
                                           name="config"
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
                    default: {},
                    individual: {}
                },
                config: {},
                rus: {},
                values: {},
                inSelect: [],
                loaded: false
            };
        },
        methods: {
            hideField(type) {
                return type === 'individual' && ! this.isIndividual;
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
                Object.keys(data.individual).forEach((key) => {
                    this.$set(this.values, key, -1);
                });
                this.config = data.config;
                this.rus = data.rus;
                this.inSelect = data.inSelect;
                this.parameters.default = data.parameters;
                this.parameters.individual = data.individual;
                this.loaded = true;
            })
        },
        computed: {
            isIndividual() {
                return this.values.config === 0;
            },
            isReady() {
                if (this.values.config === -1) return false;

                let def = Object.keys(this.parameters.default).every((key) => {
                    return this.values[key] !== -1
                });
                if (! this.isIndividual) {
                    return def;
                }

                let individual = Object.keys(this.parameters.individual).every((key) => {
                    return this.values[key] !== -1;
                });
                return def && individual;
            }
        }
    }
</script>
