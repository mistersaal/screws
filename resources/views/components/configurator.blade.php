<ul class="steps has-content-centered is-small is-hidden-mobile">
    {{-- TODO: Перейти на vue.js --}}
    {{-- TODO: spb.mtk-fortuna.ru --}}
    <li class="steps-segment">
        <span class="steps-marker"></span>
        <div class="steps-content">
            <p class="is-size-6">Тип</p>
        </div>
    </li>
    <li class="steps-segment is-active">
        <span class="steps-marker"></span>
        <div class="steps-content">
            <p class="is-size-6">Покрытие</p>
        </div>
    </li>
    <li class="steps-segment">
        <span class="steps-marker"></span>
        <div class="steps-content">
            <p class="is-size-6">Длина</p>
        </div>
    </li>
    <li class="steps-segment">
        <span class="steps-marker"></span>
        <div class="steps-content">
            <p class="is-size-6">Кол-во</p>
        </div>
    </li>
    <li class="steps-segment">
        <span class="steps-marker"></span>
        <div class="steps-content">
            <p class="is-size-6">Оформить</p>
        </div>
    </li>
    <li class="steps-segment">
        <span class="steps-marker"></span>
        <div class="steps-content">
            <p class="is-size-6">Производитель</p>
        </div>
    </li>
</ul>
<progress class="progress is-success is-hidden-tablet" value="50" max="100">50%</progress>
<div class="columns is-centered">
{{-- TODO: Сделать правую колонку для выбранных параметров --}}
    <div class="column is-half">
        <form action="" class="box overflow" method="POST" id="conf_form">
            <div id="manufacturerForm" class="field">
                <div class="field">
                    <label for="manufacturer" class="label">Производитель</label>
                    <div class="control is-expanded">
                        <div class="select is-fullwidth">
                            <select id="manufacturer" name="" class="configurator-select">
                                <option disabled selected value="-1">-- Выбор --</option>
                                <option value="1">Производитель1</option>
                                <option value="2">Производитель2</option>
                                <option value="3">Производитель3</option>
                                <option value="0">Другое</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field configurator-field is-slim">
                    <div class="control">
                        <input
                            type="text"
                            class="input configurator-another"
                            id="another_manufacturer"
                            name="another_manufacturer"
                        >
                        <p class="help">Свой вариант</p>
                    </div>
                </div>
            </div>
            <div id="typeForm" class="field">
                <div class="field">
                    <label for="type" class="label">Тип</label>
                    <div class="control is-expanded">
                        <div class="select is-fullwidth">
                            <select id="type" name="" class="configurator-select">
                                <option disabled selected value="-1">-- Выбор --</option>
                                <option value="1">ГД</option>
                                <option value="2">ГМ</option>
                                <option value="0">Другое</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field configurator-field is-slim">
                    <div class="control">
                        <input
                            type="text"
                            class="input configurator-another"
                            id="another_type"
                            name="another_type"
                        >
                        <p class="help">Свой вариант</p>
                    </div>
                </div>
            </div>
            <div id="configuratorButtons" class="field is-bottom-of-column">
                <div class="level is-mobile">
                    <div class="level-left">
                        <div class="level-item">
                            <div class="field">
                                <div class="control">
                                    <button type="button" class="button is-link" id="conf_back">Назад</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <div class="field">
                                <div class="control">
                                    <button type="button" class="button is-link" id="conf_next">Дальше</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
