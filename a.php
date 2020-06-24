<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5.8 - Daterange Filter in Datatables with Server-side Processing</title>
    <script src="{{('js/app.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="cdn.datatables.net/plug-ins/1.10.21/api/sum().js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ asset('asset/datepicker/bootstrap-datepicker.min.js') }}"></script>

</head>

<body>
    <div class="container">
        <br />
        <h3 align="center">hyaayaayahayah</h3>
        <br />
        <br />
        <div class="row input-daterange">
            <div class="col-md-4">
                <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date"
                    readonly />
            </div>
            <div class="col-md-4">
                <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
            </div>

            <div class="col-md-4">
                <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
            </div>
        </div>
        <br />
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="pharians">

                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Tanggal</th>
                        <th>Nama Pegawai</th>
                        <th>Keterangan</th>
                        <th>Jumlah Pemasukan</th>
                    </tr>
                </thead>
                <tfoot align="right">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>


    <span id="tes"></span>

</body>

</html>

<script type="text/javascript">
    $(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format:'yyyy-mm-dd',
  autoclose:true
 });

 load_data();

 function load_data(from_date = '', to_date = '')
 {
  $('#pharians').DataTable({





   processing: true,
   serverSide: true,
   ajax: {
     
    url:'{{ route("daterange.index") }}',
    
    data:{from_date:from_date, to_date:to_date},
    
   },
   columns: [
    {
     data:'id',
     name:'id'
    },
    {
     data:'tanggal',
     name:'tanggal'
    },
    {
     data:'namapegawai',
     name:'namapegawai'
    },
    {
     data:'keterangan',
     name:'keterangan'
    },
    {
     data:'jumlahpemasukan',
     name:'jumlahpemasukan'
    }
   ]

  });
 
 }

 $('#filter').click(function(){
  var from_date = $('#from_date').val();
  var to_date = $('#to_date').val();
  if(from_date != '' &&  to_date != '')
  {
   $('#pharians').DataTable().destroy();
   load_data(from_date, to_date); 
  }
  else
  {
   alert('Both Date is required');
  }
 });

 $('#refresh').click(function(){
  $('#from_date').val('');
  $('#to_date').val('');
  $('#pharians').DataTable().destroy();
  load_data();
 });

 
} );
</script>

