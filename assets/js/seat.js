(function($) {
  $(document).ready(function() {
     $('[data-corin-checkbox="true"]')
       .addClass('corin-checkbox')
       .wrap('<div class="corin-checkbox-container"></div>')
       .after('<div class="corin-checkbox-sub"></div>')
       .each(function() {
         if (this.checked) {
           $(this).siblings('.corin-checkbox-sub').addClass('checked');
         } else {
           $(this).siblings('.corin-checkbox-sub').addClass('unchecked');
       }
       })
       .parent()
       .on('click','.corin-checkbox-sub', function() {
           var theCheckbox = $(this).siblings('.corin-checkbox');
         var isChecked = theCheckbox.is(':checked');
         
         if (isChecked) {
           theCheckbox.prop('checked',false);
           $(this).removeClass('checked').addClass('unchecked');
         } else {
           theCheckbox.prop('checked',true);
           $(this).removeClass('unchecked').addClass('checked');
         }
         
       });
  });
  
}(jQuery));