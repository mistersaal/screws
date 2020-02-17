<template>

    <div>
        <configurator-progress-bar
            :active-index="activeIndex"
            :parameters="parameters"
        ></configurator-progress-bar>

        <form action="" method="POST">
            <div class="columns is-centered">
                <div class="column">
                    <div class="box overflow">
                        <h3 class="title is-5">Саморезы</h3>
                        <div class="field">
                            <label for="type" class="label">Тип</label>
                            <div class="control is-expanded">
                                <div class="select is-fullwidth">
                                    <select name="type"
                                            id="type"
                                    >
                                        <option disabled selected value="-1">-- Выбор --</option>
                                        <option value="0">Другое</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label for="length" class="label">Длина, мм</label>
                            <div class="control is-expanded">
                                <input name="length" id="length" class="input" type="number" min="5" step="1">
                            </div>
                        </div>
                        <div class="field" v-for="(parameter, index) in parameters">
                            <label :for="parameter.id" class="label">{{parameter.name}}</label>
                            <div class="control is-expanded">
                                <div class="select is-fullwidth">
                                    <select :name="parameter.id"
                                            :id="parameter.id"
                                            v-model="parameter.value"
                                            @change="selectChanged(parameter.value, index)"
                                    >
                                        <option disabled selected :value="-1">-- Выбор --</option>
                                        <option :value="option.id"
                                                v-for="option in parameter.values"
                                        >{{option.name}}</option>
                                        <option :value="0">Другое</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <configurator-order-form></configurator-order-form>
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
                parameters: [
                    {
                        id: 'color',
                        name: 'Покрытие',
                        inProgressBar: true,
                        value: -1,
                        another: '',
                        values: []
                    },
                    {
                        id: 'manufacturer',
                        name: 'Производитель',
                        inProgressBar: true,
                        value: -1,
                        another: '',
                        values: []
                    }
                ],
                activeIndex: 0,
                values: {},
                screws: []
            };
        },
        methods: {
            selectChanged(value, index) {
                if (value !== -1 && value !== 0 && index !== this.parameters.length - 1) {
                    this.activeIndex = index + 1;
                    this.updateOptions();
                } else {
                    this.activeIndex = index;
                    this.parameters[index].another = '';
                }

                for (let i = index + 1; i < this.parameters.length; i++) {
                    this.parameters[i].value = -1;
                    this.parameters[i].another = '';
                }
            },
            inputChanged(value, index) {
                if (value.length !== 0 && index !== this.parameters.length - 1) {
                    if (this.activeIndex === index) {
                        this.activeIndex = index + 1;
                        this.updateOptions();
                    }
                } else {
                    this.activeIndex = index;
                }
            },
            updateOptions() {
                let active = this.parameters[this.activeIndex];
                active.values = [];
                if (this.individual) {
                    active.values = this.values[active.id];
                } else {
                    let values = {...this.screws};
                    for (let i = 0; i < this.activeIndex; i++) {
                        values = values[this.parameters[i].value];
                    }
                    Object.keys(values).forEach((valueId) => {
                        active.values.push(this.values[active.id][valueId]);
                    });
                }
            }
        },
        created() {
            axios.get('/configurator/data')
            .then((response) => {
                let data = response.data;
                this.values = {
                    color: data.colors,
                    type: data.types,
                    manufacturer: data.manufacturers,
                    length: data.lengths
                };
                this.screws = data.screws;
                this.updateOptions();
            })
        },
        computed: {
            formReady() {
                let lastIndex = this.parameters.length - 1;
                let lastEl = this.parameters[lastIndex];
                return (
                    lastEl.value !== 0 && lastEl.value !== -1 || lastEl.another.length !== 0
                ) && this.activeIndex === lastIndex;
            },
            individual() {
                for (let i = 0; i <= this.activeIndex; i++) {
                    if (this.parameters[i].value === 0) {
                        return true;
                    }
                }
                return false;
            },
        }
    }
</script>
