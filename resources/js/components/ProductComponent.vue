<template>
  <div class="container my-5">
    <div class="row justify-content-end mb-3">
      <div class="col-4">
        <button class="btn btn-primary"><i class="fas fa-plus-circle m-1"></i>Create</button>
      </div>
      <div class="col-4">
         <form action="">
          <div class="input-group">
            <input type="text" placeholder="Search" class="form-control" />
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <h4 class="card-header">Create</h4>
          <div class="card-body">
            <form action="">
              <div class="form-group">
                <label>Name: </label>
                <input type="text" class="form-control" />
              </div>
              <div class="form-group mt-3">
                <label>Price: </label>
                <input type="number" class="form-control" />
              </div>
              <button class="btn btn-primary mt-3"><i class="fas fa-save m-1"></i>Save</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-8">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Book</td>
              <td>1000</td>
              <td>
                <button class="btn btn-success btn-sm"><i class="fas fa-edit m-1"></i>Edit</button>
                <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt m-1"></i>Delete</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Pencil</td>
              <td>500</td>
              <td>
                <button class="btn btn-success btn-sm"><i class="fas fa-edit m-1"></i>Edit</button>
                <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt m-1"></i>Delete</button>
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
