@extends('front.layouts.master')
@section('title','Sepet')
@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active"> SHOPPING CART</li>
        </ul>
        <h3> SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i
                    class="icon-arrow-left"></i> Continue Shopping </a></h3>
        <hr class="soft"/>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Quantity/Update</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Tax</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="product in products">
                <td><img width="60" src="themes/images/products/4.jpg" alt=""/></td>
                <td v-text="product.description"></td>
                <td>
                    <div class="input-append">
                        <input class="span1" style="max-width:34px" placeholder="1"
                               id="appendedInputButtons" size="16" type="text" :value="product.total">

                        <button class="btn" type="button" @click="minusQuantity(product.id)">
                            <i class="icon-minus"></i>
                        </button>

                        <button class="btn" type="button" @click="addQuantity(product.id)">
                            <i class="icon-plus"></i>
                        </button>

                        <button class="btn btn-danger" @click="deleteProduct(product.id)" type="button">
                            <i class="icon-remove icon-white"></i>
                        </button>
                    </div>
                </td>
                <td v-text="product.price"></td>
                <td>$25.00</td>
                <td></td>
                <td v-text="product.price"></td>
            </tr>


            <tr>
                <td colspan="6" style="text-align:right">Total Price:</td>
                <td> $228.00</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align:right">Total Discount:</td>
                <td> $50.00</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align:right">Total Tax:</td>
                <td> $31.00</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align:right"><strong>TOTAL ($228 - $50 + $31) =</strong></td>
                <td class="label label-important" style="display:block"><strong v-text="totalPrice"></strong></td>
            </tr>
            </tbody>
        </table>

        <a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
        <a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>


    </div>
@endsection

@section('script')
    <script src="{{asset('assets/js/vue.js')}}"></script>

    <script>
        const app = new Vue({
            el: '#app',
            name: 'Silicon made academy',
            data: {
                name: 'test',
                products: [],
                totalProduct: '',
                totalPrice: 0,
                totalQuantity: 5
            },
            mounted() {
                this.totalProduct = localStorage.getItem('basket');
                this.products = JSON.parse(localStorage.getItem('products'));
                this.products = Object.values(this.products);
                this.totalPrices();
                //  console.log(Object.values(this.products))
            },
            methods: {
                deleteProduct(id) {
                    this.products = this.products.filter(resp => resp.id !== id);
                    this.totalPrices();
                },
                addQuantity(id) {
                    this.products.forEach(product => {
                        if (product.id === id) {
                            product.total += 1;
                            //  product.total = product.total +1;
                        }
                    })
                    this.totalPrices();
                },
                minusQuantity(id) {
                    this.products.forEach(product => {
                        if (product.id === id) {
                            if (product.total === 1) {
                                product.total = 1;
                            } else {
                                product.total -= 1;
                            }

                        }
                    })
                    this.totalPrices();
                    console.log(this.products)
                },
                totalPrices() {

                    this.totalPrice = 0;
                    this.products.forEach(product => {
                        this.totalPrice += product.price * product.total;
                    })
                }
            }
        });
    </script>
@endsection

