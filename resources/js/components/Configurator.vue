<template>
    <div>

        <ul class="steps has-content-centered is-small is-hidden-mobile">
            <!-- TODO: spb.mtk-fortuna.ru -->
            <li class="steps-segment" :class="{'is-active': isActiveProgress(index)}"
                v-for="(parameter, index) in parameters"
                v-if="parameter.inProgressBar"
            >
                <span class="steps-marker"></span>
                <div class="steps-content">
                    <p class="is-size-6">{{ parameter.name }}</p>
                </div>
            </li>
        </ul>
        <progress class="progress is-success is-hidden-tablet" :value="percents()" max="100">{{percents()}}%</progress>

        <div class="columns is-centered">
    <!--         TODO: Сделать правую колонку для выбранных параметров-->
            <div class="column is-half">
                <form action="" class="box overflow" method="POST" id="conf_form">
                    <div class="field" v-for="(parameter, index) in parameters">
                        <div class="field">
                            <label :for="parameter.id" class="label">{{parameter.name}}</label>
                            <div class="control is-expanded">
                                <div class="select is-fullwidth">
                                    <select :name="parameter.id"
                                            class="configurator-select"
                                            v-model="parameter.value"
                                            :disabled="! isActiveField(index)"
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
                        <div class="field configurator-field" :class="{'is-slim': parameter.value !== 0}">
                            <div class="control">
                                <input
                                    type="text"
                                    class="input configurator-another"
                                    :name="'another_' + parameter.id"
                                    v-model="parameter.another"
                                    @input="inputChanged(parameter.another, index)"
                                    :disabled="! isActiveField(index)"
                                >
                                <p class="help">Свой вариант</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Configurator",
        data() {
            return {
                parameters: [
                    {
                        id: 'type',
                        name: 'Тип',
                        inProgressBar: true,
                        value: -1,
                        another: '',
                        values: []
                    },
                    {
                        id: 'color',
                        name: 'Покрытие',
                        inProgressBar: true,
                        value: -1,
                        another: '',
                        values: []
                    },
                    {
                        id: 'length',
                        name: 'Длина',
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
                formReady: false,
                individual: false,
                values: {},
                screws: []
            };
        },
        methods: {
            isActiveProgress(index) {
                if (index === this.activeIndex) {
                    return true;
                } else if (! this.parameters[this.activeIndex].inProgressBar) {
                    for (let i = this.activeIndex - 1; i >= 0; i--) {
                        if (this.parameters[i].inProgressBar) {
                            return index === i;
                        }
                    }
                } else {
                    return false;
                }
            },
            isActiveField(index) {
                return index <= this.activeIndex;
            },
            percents() {
                return (this.activeIndex + 1) / this.parameters.length * 100;
            },
            selectChanged(value, index) {
                this.checkIndividual();

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
                        console.log(this.values[active.id][valueId]);
                        active.values.push(this.values[active.id][valueId]);
                    });
                }
            },
            checkIndividual() {
                this.individual = false;
                for (let i = 0; i <= this.activeIndex; i++) {
                    if (this.parameters[i].value === 0) {
                        this.individual = true;
                    }
                }
            }
        },
        updated() {
            let lastIndex = this.parameters.length - 1;
            let lastEl = this.parameters[lastIndex];
            this.formReady = (
                lastEl.value !== 0 && lastEl.value !== -1 || lastEl.another.length !== 0
            ) && this.activeIndex === lastIndex;
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
        }
    }
</script>
