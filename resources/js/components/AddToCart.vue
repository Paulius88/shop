<template>
    <div>
        <hr>
            <button type="button" class="btn btn-outline-info btn-lg" 
                v-on:click.prevent="addProductToCart()">
                Add To Cart
            </button>
    </div>
</template>

<script>
    export default {
        data(){

        },
        props:['productId', 'userId'],
        methods:{
            async addProductToCart(){

                //Checking if user logged in.
                if(this.userId == 0){
                    this.$toastr.e('You Need to login, To add this product in Cart');
                    return;
                }

                //If user logged in then add item to cart.

                let response = await axios.post('/cart', {
                    'product_id': this>this.productId
                });
                console.log(responese.data);
            }

        }, 
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
  