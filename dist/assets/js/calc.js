const pluralize = (n, f) => f[n % 100 > 10 && n % 100 < 20 ? 2 : n % 10 == 1 ? 0 : n % 10 > 1 && n % 10 < 5 ? 1 : 2];

const calcInit = () => {
  const value = document.getElementById('value');
  const symbol = document.getElementById('symbol');
  const days = document.getElementById('days');
  const range = document.getElementById('range');
  const ammount = document.getElementById('ammount');

  if (!value || !days || !range || !ammount || !symbol) return;

  value.value = window.currency.convertToLocalCurrency(value.value, false);
  value.dataset.min = value.min = window.currency.convertToLocalCurrency(value.dataset.min, false);
  value.dataset.max = value.max = window.currency.convertToLocalCurrency(value.dataset.max, false);
  symbol.innerHTML = window.currency.localCurrencySymbol;

  const rate = ammount.dataset.rate;

  const labelDay = days.dataset.day || null;
  const labelDays = days.dataset.days || null;
  const labelDaysMany = days.dataset.daysMany || null;

  const isPluralize = labelDay && labelDays && labelDaysMany;

  const getCurrentRangeValue = () => {
    let result = +value.value;

    result = Math.max(result, +value.dataset?.min || 1);
    result = Math.min(result, +value.dataset?.max || 1000000);

    return result;
  };

  const calculateCompoundInterest = (principal, days, rate = 0.05) => {
    return Math.ceil(principal * Math.pow(1 + rate, days));
  };

  const calcRangeValue = () => {
    const calculatedValue = calculateCompoundInterest(getCurrentRangeValue(), +range.value, +rate);

    ammount.innerText = window.currency.toLocalFormat(calculatedValue);

    const count = +range.value;
    days.innerText = `${count}${isPluralize ? ' ' + pluralize(count, [labelDay, labelDays, labelDaysMany]) : ''}`;
  };

  range.addEventListener('input', calcRangeValue);
  value.addEventListener('change', calcRangeValue);

  value.addEventListener('change', () => {
    value.value = getCurrentRangeValue();
  });

  calcRangeValue();
};

window.calc = { init: calcInit };
