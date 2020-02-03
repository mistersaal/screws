<ul class="steps has-content-centered is-small is-hidden-mobile">
    <li class="steps-segment">
{{-- TODO: HTML: Поставить производителя в конец, цвет -> покрытие --}}
{{-- TODO: spb.mtk-fortuna.ru --}}
        <span class="steps-marker"></span>
        <div class="steps-content">
            <p class="is-size-6">Производитель</p>
        </div>
    </li>
    <li class="steps-segment">
        <span class="steps-marker"></span>
        <div class="steps-content">
            <p class="is-size-6">Тип</p>
        </div>
    </li>
    <li class="steps-segment is-active">
        <span class="steps-marker"></span>
        <div class="steps-content">
            <p class="is-size-6">Цвет</p>
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
</ul>
<progress class="progress is-success is-hidden-tablet" value="50" max="100">50%</progress>
<div class="columns is-centered">
{{-- TODO: Сделать правую колонку для выбранных параметров --}}
    <div class="column is-half">
        <form action="" class="box" method="POST">
            <div id="manufacturerForm" class="field">
                <div class="field">
                    <label for="manufacturer" class="label">Производитель</label>
                    <div class="control is-expanded">
                        <div class="select is-fullwidth">
                            <select id="manufacturer" name="" class="configurator-select">
                                <option disabled selected value>-- Выбор --</option>
                                <option value="1">Производитель1</option>
                                <option value="2">Производитель2</option>
                                <option value="3">Производитель3</option>
                                <option value="0">Другое</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input
                            type="text"
                            class="input is-not-visible"
                            id="another_manufacturer"
                            name="another_manufacturer"
                        >
                    </div>
                </div>
            </div>
            <div id="configuratorButtons" class="field is-bottom-of-column">
                <div class="level is-mobile">
                    <div class="level-left">
                        <div class="level-item">
                            <div class="field">
                                <div class="control">
                                    <button class="button is-link" name="" id="">Назад</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <div class="field">
                                <div class="control">
                                    <button class="button is-link" name="" id="">Дальше</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
