<template>
    <div class="container my-5">
        <div class="row">
            <SearchComponent :isEdit="isEdit" @create="beforeCreate" />
            <div class="col-4">
                <CreateProduct
                    :product="product"
                    :isEdit="isEdit"
                    @create="create"
                    @update="update"
                />
            </div>
            <div class="col-8">
                <ProductList
                    :products="products"
                    @edit="edit"
                    @delete="deleteProduct"
                />
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
                id: "",
                name: "",
                price: "",
            },
            products: [],
            isEdit: false,
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
        beforeCreate() {
            this.isEdit = false;
            this.product.id = "";
            this.product.name = "";
            this.product.price = "";
        },
        create() {
            axios
                .post("http://127.0.0.1:8000/api/product", this.product)
                .then((res) => {
                    this.view();
                    (this.product.name = ""), (this.product.price = "");
                });
        },
        edit(product) {
            this.isEdit = true;
            this.product.id = product.id;
            this.product.name = product.name;
            this.product.price = product.price;
        },
        update() {
            axios
                .put(
                    `http://127.0.0.1:8000/api/product/${this.product.id}`,
                    this.product
                )
                .then((res) => {
                    this.view();
                    (this.product.name = ""), (this.product.price = "");
                    this.isEdit = false;
                });
        },
        deleteProduct(id) {
            if (!confirm("Are u sure to delete")) {
                return;
            }

            axios
                .delete(`http://127.0.0.1:8000/api/product/${id}`)
                .then((res) => {
                    this.view();
                });
        },
    },
    created() {
        this.view();
    },
};
</script>
