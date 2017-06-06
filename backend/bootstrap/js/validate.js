$(document).ready(function(){
    $('#info').validate({
        rules:{
            tieude:{
                required:true,
            },
            tomtat:{
                required:true,
            },
            file:{
                required:true,
            },
            theloai:{
                required:true,
            },
            noidung:{
                required:true,
            }
        },
        messages:{
            tieude:{
                required:"Vui lòng nhập tiêu đề bài viết !",
            },
            tomtat:{
                required:"Vui lòng nhập tóm tắt bài viết !",
            },
            file:{
                required:"Vui lòng chọn file upload !",
            },
            theloai:{
                required:"Vui lòng chọn thể loại bài viết !",
            },
            noidung:{
                required:"Vui lòng nhập nội dung bài viết !",
            }
        }
                
    });
});
