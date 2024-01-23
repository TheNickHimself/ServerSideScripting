document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('fltr_make_id').addEventListener('change', function(){
        alert(this.value)
        let makeId = this.value || this.options[this.selectedIndex].value
        window.location.href = window.location.href.split('?')[0] + '?id=' + makeId});
    });