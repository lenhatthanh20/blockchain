(function worker2() {
    $.post('confirm.php',{confirm: 'isOk'}, function(data) {
        console.log(data);
        setTimeout(worker2, 1000);
    });
})();