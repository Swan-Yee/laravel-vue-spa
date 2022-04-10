<template>
    <div class="container my-5">
        <div class="row">
            <SearchComponent />
            <div class="col-4">
                <CreateProduct :product="product" @create="create" />
            </div>
            <div class="col-8">
                <ProductList :products="products" />
            </div>
        </div>
    </div>
</template>

<script>
import SearchComponent from "./SearchComponent.vue";
import CreateProduct from "./CreateProduct.vue";
import ProductList from "./ProductList.vue";

export default {
    name: "ProductComponent",
    components: {
        SearchComponent,
        CreateProduct,
        ProductList,
    },
    data() {
        return {
            product: {
                name: "",
                price: "",
            },
            products: [],
        };
    },
    methods: {
        view() {
            axios
                .get("http://127.0.0.1:8000/api/product")
                .then((response) => {
                    this.products = response.data;
                })
                .catch((error) => console.error(error));
        },
        create() {
            axios
                .post("http://127.0.0.1:8000/api/product", this.product)
                .then((res) => {
                    this.view();
                    (this.product.name = ""), (this.product.price = "");
                });
        },
    },
    created() {
        this.view();
    },
};
</script>
