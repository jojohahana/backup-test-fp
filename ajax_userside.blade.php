<script>
    $(document).ready(function() {
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // $('#viewModalAttnd').on('click', function(){
    //     $('#addModalAttnd').modal('show');
    // });
    
// End Tag document ready 
});
</script>