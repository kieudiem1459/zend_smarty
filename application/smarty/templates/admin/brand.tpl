<style>
    #table_brand_wrapper .dataTables_filter input {
        background-color: white;
    }
    .dataTables_wrapper .dataTables_length select{
        background-color: white;
    }

    h3 {
        text-align: center;
    }
</style>


<h3 style="text-align: center;">{$title}</h3>
<table id="table_brand" class="display nowrap" style="width: 100%">
    <thead>
        <tr style="text-align: center">
            <th>STT</th>
            <th>Hình ảnh</th>
            <th>Tên Thương Hiệu</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        {foreach $list_brand as $brand}
            <tr style="text-align: center">
                <td>{$brand.id}</td>
                <td>{if $brand.image != '' } <img src="../../asset/images/brands/{{$brand.image}}" alt="Girl in a jacket"
                        width="50px" height="40px">{/if}</td>
                <td>{$brand.brand_name}</td>
                <td><button style="padding-right: 10px">Edit</button> <button>Delete</button></td>
            </tr>
        {/foreach}
    </tbody>
</table>

<script type="text/javascript" charset="UTF-8" src="../../asset/admin/js/table_brand.js"></script>