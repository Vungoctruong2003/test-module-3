<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container card-body" >
    <h4>Thêm mới đại lí phân phối</h4>
    <form action="{{route('store')}}" method="post">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Tên đại lí</label>
                    <input type="text" id="form6Example1" name="name" class="form-control @error('name') is-invalid @enderror"  />
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Điện thoại</label>
                    <input type="text" id="form6Example2" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"  />
                    @error('phone_number')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">Email</label>
            <input type="text" id="form6Example3" name="email" class="form-control  @error('email') is-invalid @enderror"  />
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Text input -->
        <label class="form-label" for="form6Example4">Địa chỉ</label>
        <div class="form-outline mb-4">

            <textarea name="address" class="form-control  @error('address') is-invalid @enderror" cols="60" rows="5"></textarea>
            @error('address')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example5">Tên người quản lí</label>
            <input type="text" name="manager" id="forxample5" class="form-control @error('manager') is-invalid @enderror"   />
            @error('manager')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example6">Trạng thái</label>
            <select name="status" class="form-control @error('status') is-invalid @enderror" style="width: 500px;height: 30px">
                <option value="Hoạt động">Hoạt động</option>
                <option value="Không hoạt động">Không hoạt động</option>
            </select>
            @error('status')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Thêm mới</button>
    </form>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
