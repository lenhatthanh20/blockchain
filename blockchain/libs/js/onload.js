(function worker() {
    $.post('notify.php',{notify: 'ok'}, function(data) {
        if(data === 'latest' || data === 'health' || data === 'action' || data === 'information'){
            $('#showInfo').append(
            '<span class="label label-warning">Doctor wants to read: ' + data + '</span>' +
            '        <button id="accept" type="button" class="btn btn-outline-info">Accept</button>\n' +
            '        <a class="navbar-brand" href="">\n' +
            '            <button type="button" class="btn btn-outline-info">Reject</button>\n' +
            '        </a>');
        }
        setTimeout(worker, 1000);
    });
})();