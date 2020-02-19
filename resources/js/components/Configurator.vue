<template>

    <div :class="{'v-load': ! loaded}">
<!--        <configurator-progress-bar-->
<!--            :active-index="activeIndex"-->
<!--            :parameters="parameters"-->
<!--        ></configurator-progress-bar>-->

        <form action="" method="POST">
            <div class="columns is-centered">
                <div class="column">
                    <div class="box overflow">
                        <h3 class="title is-5">Саморезы</h3>
                        <div class="field">
                            <label for="type" class="label">{{rus.config}}</label>
                            <div class="control is-expanded">
                                <div class="select is-fullwidth">
                                    <select name="type"
                                            id="type"
                                            v-model.number="values.config"
                                    >
                                        <option disabled selected value="-1">-- Выбор --</option>
                                        <option :value="index" v-for="(type, index) in config">{{type}}</option>
                                        <option value="0">Другое</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <template v-for="(type, index) in parameters">
                            <div
                                class="field configurator-field"
                                :class="{'is-slim': hideField(index)}"
                                v-for="(parameter, name) in type"
                            >
                                <label :for="name" class="label">{{rus[name]}}</label>
                                <div class="control is-expanded">
                                    <div class="select is-fullwidth">
                                        <select :name="name"
                                                :id="name"
                                                v-model.number="values[name]"
                                        >
                                            <option disabled selected value="-1">-- Выбор --</option>
                                            <option :value="id" v-for="(option, id) in parameter">{{option}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="column">
<!--                    <configurator-order-form></configurator-order-form>-->
                </div>
            </div>
        </form>
    </div>

</template>

<script>
    import ConfiguratorProgressBar from "./ConfiguratorProgressBar";
    import ConfiguratorOrderForm from "./ConfiguratorOrderForm";

    export default {
        name: "Configurator",
        components: {ConfiguratorOrderForm, ConfiguratorProgressBar},
        data() {
            return {
                parameters: {
                    default: {},
                    individual: {}
                },
                config: {},
                rus: {},
                values: {},
                loaded: false
            };
        },
        methods: {
            hideField(type) {
                return type === 'individual' && ! this.isIndividual;
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
