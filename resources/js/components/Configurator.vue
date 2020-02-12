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
                    <div :id="parameter.id + 'Form'" class="field" v-for="(parameter, index) in parameters">
                        <div class="field">
                            <label :for="parameter.id" class="label">{{parameter.name}}</label>
                            <div class="control is-expanded">
                                <div class="select is-fullwidth">
                                    <select :id="parameter.id"
                                            :name="parameter.id"
                                            class="configurator-select"
                                            v-model="parameter.value"
                                            :disabled="! isActiveField(index)"
                                            @change="selectChanged(parameter.value, index)"
                                    >
                                        <option disabled selected :value="-1">-- Выбор --</option>
                                        <option :value="1">Производитель1</option>
                                        <option :value="2">Производитель2</option>
                                        <option :value="3">Производитель3</option>
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
                                    :id="'another_' + parameter.id"
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
                        another: ''
                    },
                    {
                        id: 'color',
                        name: 'Покрытие',
                        inProgressBar: true,
                        value: -1,
                        another: ''},
                    {
                        id: 'length',
                        name: 'Длина',
                        inProgressBar: true,
                        value: -1,
                        another: ''},
                    {
                        id: 'amount',
                        name: 'Кол-во',
                        inProgressBar: true,
                        value: -1,
                        another: ''
                    },
                    {
                        id: 'manufacturer',
                        name: 'Производитель',
                        inProgressBar: true,
                        value: -1,
                        another: ''
                    }
                ],
                activeIndex: 0,
                formReady: false
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
                if (value !== -1 && value !== 0 && index !== this.parameters.length - 1) {
                    this.activeIndex = index + 1;
                } else {
                    this.activeIndex = index;
                    this.parameters[index].another = '';
                }

                for (let i = index + 1; i < this.parameters.length; i++) {
                    this.parameters[i].value = -1;
                    this.parameters[i].another = '';
                }
                this.checkReadiness();
            },
            inputChanged(value, index) {
                if (value.length !== 0 && index !== this.parameters.length - 1) {
                    this.activeIndex = index + 1;
                } else {
                    this.activeIndex = index;
                }
                this.checkReadiness();
            },
            checkReadiness() {
                let lastIndex = this.parameters.length - 1;
                let lastEl = this.parameters[lastIndex];
                this.formReady = (
                    lastEl.value !== 0 && lastEl.value !== -1 || lastEl.another.length !== 0
                ) && this.activeIndex === lastIndex;
            }
        }
    }
</script>
