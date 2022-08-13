

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Hiển thị</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>
                                <input type="checkbox" id="customCheck1" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                            </td>
                            <td>
                                <button class="btn-primary">Sửa</button>
                                <button class="btn-danger">Xóa</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>
                                <input type="checkbox" id="customCheck1" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                            </td>
                            <td>
                                <button class="btn-primary">Sửa</button>
                                <button class="btn-danger">Xóa</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>
                                <input type="checkbox" id="customCheck1" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                            </td>
                            <td>
                                <button class="btn-primary">Sửa</button>
                                <button class="btn-danger">Xóa</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<style>
    .custom-control-input {
        z-index: -1;
        width: 1rem;
        height: 1.25rem;
        opacity: 0;
    }
</style>
