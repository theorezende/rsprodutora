/**
 * Created by marcelo on 02/11/15.
 */

function validate() {
    if ($('#pass').val() == $('#again').val()) {
        $('#form').submit();
    } else {
        alert("Password different.");
        $('#again').focus();
    }
}