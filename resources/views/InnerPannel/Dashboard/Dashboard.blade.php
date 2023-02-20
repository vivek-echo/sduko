@extends('InnerPannel.Layout.MainLayout')

@section('content')

svbsjhvbsbvbb
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
     $(document).ready(function() {
      $('#preloader').fadeIn();
        $('#dashboardLink').addClass('mm-active');
        $.ajax({
                url: "{{ url('/getProfileData') }}",
                success: function(res) {
                  
                  $('#userName').html(res.userName);
                  $('#email').html(res.email);
                  $('#userType').html(res.userType);
                  $('#preloader').fadeOut();
                  //   var optionOperator = ['<option value="0" >--Select Operator--</option>'];
                  //   var optionLengthOperator = res.data.length;

                  //   for (var i = 0; i < optionLengthOperator; i++) {

                  //       var resOptionOperator = '<option value=' + res.data[i].id + ' >' + res.data[i]
                  //           .name + '</option>'
                  //       optionOperator.push(resOptionOperator);


                  //   }
                  //   $('#billerId').html(optionOperator);
                  //   $('#perpaidOperatorLoading').hide();
                }
            });
     })
</script>
@endsection