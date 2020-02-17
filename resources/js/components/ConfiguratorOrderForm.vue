<template>
    <div class="box">
        <h3 class="title is-5">Заказ</h3>
        <div class="field">
            <p>
                <strong>Цена за 1 ленту:</strong>
                <span class="is-size-5">{{price}}₽</span>
            </p>
            <p class="help">В 1 ленте 50 саморезов</p>
        </div>
        <div class="field">
            <label for="amount" class="label">Кол-во лент</label>
            <div class="control">
                <input type="number" class="input" id="amount" name="amount" v-model="amount" min="0" step="1">
            </div>
        </div>
        <div class="field">
            <p>
                <strong>Итог:</strong>
                <span class="is-size-5">{{price * amount}}₽</span>
            </p>
        </div>
        <div class="field is-grouped is-grouped-multiline">
          <div class="control">
            <button type="button" class="button is-link" name="addInCart" id="addInCart">
                <span class="icon"><i class="fas fa-cart-plus"></i></span>
                <span>В корзину</span>
            </button>
          </div>
          <div class="control">
            <button type="button" class="button is-link is-light" name="goToCart" id="goToCart">
                <span class="icon"><i class="fas fa-credit-card"></i></span>
                <span>Перейти к оплате</span>
            </button>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ConfiguratorOrderForm",
        data() {
            return {
                amount: 0,
                price: 24
            }
        }
    }
</script>

<style scoped>

</style>
