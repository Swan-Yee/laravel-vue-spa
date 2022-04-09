<template>
    <div class="container my-5">
        <div class="row">
            <div class="row">
                <div class="col-8 offset-4 d-flex justify-content-between">
                    <button class="btn btn-primary">Create</button>
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" />
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <h3 class="card-header">Create</h3>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" />
                            </div>
                            <div class="mt-4">
                                <div class="btn btn-primary">Save</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Book</td>
                            <td>1000</td>
                            <td>
                                <button class="btn btn-success">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>
