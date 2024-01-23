
document.getElementById('fltr_make_id').addEventListener('change', function () {
    let companyId = this.value || this.options[this.selectedIndex].value
    window.location.href = window.location.href.split('?')[0] + '?id=' + companyId
})