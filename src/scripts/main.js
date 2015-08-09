$(document).ready(function() {

    if ($(window).width() > 600) {

        var header = new Headhesive('.sitenav', {
            offset: 300,
            classes: {
                clone: 'sitenav--clone',
                stick: 'sitenav--stick',
                unstick: 'sitenav--unstick'
            }
        });

    }


});
