jQuery(document).ready(function ($) {
    const slider = $('#customRange');
    const sliderValue = $('#sliderValue');
    const price = $('#fieldValue');
    const year = $('#yearValue');
    const maxValue = parseInt(slider.attr('max'));

    const sliderAction = (e) => {
        const values = $(e.currentTarget).data('values');
        const currentValue = parseInt($(e.currentTarget).val());

        const minValue = $(e.currentTarget).attr('min');
        sliderValue.text(values[currentValue].value);
        price.text(values[currentValue].price);
        year.text(values[currentValue].yearly_price);

        // Check if the slider is at max value and toggle class
        if (currentValue === maxValue) {
            $('.estimated-price, .anual-price').addClass('max-value');
        } else {
            $('.estimated-price, .anual-price').removeClass('max-value');
        }

        e.currentTarget.style.backgroundSize = ((currentValue - minValue) * 100 / (maxValue - minValue)) + '% 100%';
    };

    slider.on('input', sliderAction);
});
