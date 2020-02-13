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
    </div>
</template>

<script>
    export default {
        name: "ConfiguratorProgressBar",
        props: {
            parameters: {
                default: {}
            },
            activeIndex: {
                default: 0
            }
        },
        methods: {
            percents() {
                return (this.activeIndex + 1) / this.parameters.length * 100;
            },
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
        }
    }
</script>

<style scoped>

</style>
