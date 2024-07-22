jQuery(document).ready(function ($) {
    const slider = $('#customRange');
    const sliderValue = $('#sliderValue');
    const price = $('#fieldValue')

    const sliderAction = (e) => {
        const values = $(e.currentTarget).data('values');
        const currentValue = parseInt($(e.currentTarget).val());

        const minValue = $(e.currentTarget).attr('min')
        const maxValue = $(e.currentTarget).attr('max')
        sliderValue.text(values[currentValue].value);
        price.text(values[currentValue].price)
        e.currentTarget.style.backgroundSize = ((currentValue - minValue) * 100 / (maxValue - minValue)) + '% 100%';
    };

    slider.on('input', sliderAction);
});
