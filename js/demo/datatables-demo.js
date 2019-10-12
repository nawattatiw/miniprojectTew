// $(document).ready( function () {
//   $('#dataTable').DataTable();
// } );
    $(function(){
      $("#dataTable").DataTable({
        "scrollCollapse": true, // ให้ยืดหดการแสดงตามปริมาณรายการข้อมูลที่แสดง
        "scrollX": true,
        "paging":  true ,
        "fixedHeader":  true ,
        "autoFill":  true

      });
    });
