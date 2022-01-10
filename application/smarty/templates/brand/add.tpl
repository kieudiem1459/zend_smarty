<style>
    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
    }

    .remove {
        display: block;
        background: #444;
        border: 1px solid black;
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .remove:hover {
        background: white;
        color: black;
    }
</style>


<h3 style="text-align: center;">{$this->title}</h3>

<div class="mx-5" style="background-color: white; padding: 10px; border-radius: 10px;">
    <form class="mx-5 my-3" onsubmit="onSubmitForm('{{$this->url(['controller' => 'brand', 'action' => 'add'])}}')"
        method="post" id="formAdd" enctype="multipart/form-data">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tên Thương Hiệu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="brand_name" name="brand_name" required>
                {if isset($error_input.brand_name)}
                    {foreach $error_input.brand_name as $err}
                        <span class="err_input">{$err}</span><br>
                    {/foreach}
                {/if}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Mô Tả</label>
            <div class="col-sm-10">
                <textarea rows="3" class="form-control" id="description" name="description"> </textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hình ảnh</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="brand_image" name="brand_image">
            </div>
            <div class="row">
                <div class="col-md-12 filearray"></div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 mt-2">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#brand_image').change(function() {
            var flength = this.files.length;
            if (flength === 1) {
                var filereader = new FileReader();
                filereader.onload = function(e) {
                    $('.filearray').append('<span class="pip" ' +
                            '<img src=' + e.target.result +
                            ' width=150 height=150/>' +
                            '<br/><span class="remove"><i class="fa fa-remove"></i> </span></span>')
                        .insertAfter(
                            "#files");
                    $(".remove").click(function() {
                        $(this).parent(".pip").remove();
                    });
                };
                filereader.readAsDataURL(this.files[0]);
            } else {
                $('.filearray').append('<span class="err_input">Chỉ được chọn 1 hình !!!</span>');
            }
        });
    });
</script>