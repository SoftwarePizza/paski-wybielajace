/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
import LocalizationException from './exception/localization';

class NumberSymbol {
  /**
   * NumberSymbolList constructor.
   *
   * @param string decimal Decimal separator character
   * @param string group Digits group separator character
   * @param string list List elements separator character
   * @param string percentSign Percent sign character
   * @param string minusSign Minus sign character
   * @param string plusSign Plus sign character
   * @param string exponential Exponential character
   * @param string superscriptingExponent Superscripting exponent character
   * @param string perMille Permille sign character
   * @param string infinity The infinity sign. Corresponds to the IEEE infinity bit pattern.
   * @param string nan The NaN (Not A Number) sign. Corresponds to the IEEE NaN bit pattern.
   *
   * @throws LocalizationException
   */
  constructor(
    decimal,
    group,
    list,
    percentSign,
    minusSign,
    plusSign,
    exponential,
    superscriptingExponent,
    perMille,
    infinity,
    nan,
  ) {
    this.decimal = decimal;
    this.group = group;
    this.list = list;
    this.percentSign = percentSign;
    this.minusSign = minusSign;
    this.plusSign = plusSign;
    this.exponential = exponential;
    this.superscriptingExponent = superscriptingExponent;
    this.perMille = perMille;
    this.infinity = infinity;
    this.nan = nan;

    this.validateData();
  }

  /**
   * Get the decimal separator.
   *
   * @return string
   */
  getDecimal() {
    return this.decimal;
  }

  /**
   * Get the digit groups separator.
   *
   * @return string
   */
  getGroup() {
    return this.group;
  }

  /**
   * Get the list elements separator.
   *
   * @return string
   */
  getList() {
    return this.list;
  }

  /**
   * Get the percent sign.
   *
   * @return string
   */
  getPercentSign() {
    return this.percentSign;
  }

  /**
   * Get the minus sign.
   *
   * @return string
   */
  getMinusSign() {
    return this.minusSign;
  }

  /**
   * Get the plus sign.
   *
   * @return string
   */
  getPlusSign() {
    return this.plusSign;
  }

  /**
   * Get the exponential character.
   *
   * @return string
   */
  getExponential() {
    return this.exponential;
  }

  /**
   * Get the exponent character.
   *
   * @return string
   */
  getSuperscriptingExponent() {
    return this.superscriptingExponent;
  }

  /**
   * Gert the per mille symbol (often "‰").
   *
   * @see https://en.wikipedia.org/wiki/Per_mille
   *
   * @return string
   */
  getPerMille() {
    return this.perMille;
  }

  /**
   * Get the infinity symbol (often "∞").
   *
   * @see https://en.wikipedia.org/wiki/Infinity_symbol
   *
   * @return string
   */
  getInfinity() {
    return this.infinity;
  }

  /**
   * Get the NaN (not a number) sign.
   *
   * @return string
   */
  getNan() {
    return this.nan;
  }

  /**
   * Symbols list validation.
   *
   * @throws LocalizationException
   */
  validateData() {
    if (!this.decimal || typeof this.decimal !== 'string') {
      throw new LocalizationException('Invalid decimal');
    }

    if (!this.group || typeof this.group !== 'string') {
      throw new LocalizationException('Invalid group');
    }

    if (!this.list || typeof this.list !== 'string') {
      throw new LocalizationException('Invalid symbol list');
    }

    if (!this.percentSign || typeof this.percentSign !== 'string') {
      throw new LocalizationException('Invalid percentSign');
    }

    if (!this.minusSign || typeof this.minusSign !== 'string') {
      throw new LocalizationException('Invalid minusSign');
    }

    if (!this.plusSign || typeof this.plusSign !== 'string') {
      throw new LocalizationException('Invalid plusSign');
    }

    if (!this.exponential || typeof this.exponential !== 'string') {
      throw new LocalizationException('Invalid exponential');
    }

    if (!this.superscriptingExponent || typeof this.superscriptingExponent !== 'string') {
      throw new LocalizationException('Invalid superscriptingExponent');
    }

    if (!this.perMille || typeof this.perMille !== 'string') {
      throw new LocalizationException('Invalid perMille');
    }

    if (!this.infinity || typeof this.infinity !== 'string') {
      throw new LocalizationException('Invalid infinity');
    }

    if (!this.nan || typeof this.nan !== 'string') {
      throw new LocalizationException('Invalid nan');
    }
  }
}

export default NumberSymbol;
