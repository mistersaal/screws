@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="container">
            <div class="field is-grouped is-grouped-multiline configurator-radio">
                <div class="control">
                    <input type="radio" name="test" value="test1" id="1" class="is-hidden">
                    <label for="1">
                        <span class="radio-dot"></span>
                        Yes
                    </label>
                </div>
                <div class="control">
                    <input type="radio" name="test" value="test2" id="2" class="is-hidden" checked>
                    <label for="2">
                        <span class="radio-dot"></span>
                        No
                    </label>
                </div>
            </div>
            <div class="field">
                <label for="" class="label"></label>
                <div class="control">
                    <div class="select">
                        <select id="" name="">
                            <option>Test</option>
                            <option>Test</option>
                            <option>Test</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
