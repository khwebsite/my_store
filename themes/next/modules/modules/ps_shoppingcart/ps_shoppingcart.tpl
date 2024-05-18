{**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*}
<div id="_desktop_cart">
    <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
        {if $cart.products_count > 0}
            <div class="ht_cart cart-hover-content">
                <ul>
                    {foreach from=$cart.products item=product}
                        <li class="cart-wishlist-item">
                            {include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}
                        </li>
                    {/foreach}
                </ul>
                <div class="cart-summary">
                    <div class="cart-subtotals">
                        {foreach from=$cart.subtotals item="subtotal"}
                            <div class="{$subtotal.type}">
                                <span class="label">{$subtotal.label}</span>
                                <span class="value">{$subtotal.value}</span>
                            </div>
                        {/foreach}
                    </div>
                    <div class="cart-total">
                        <span class="label">{$cart.totals.total.label}</span>
                        <span class="value">{$cart.totals.total.value}</span>
                    </div>
                </div>
                <div class="cart-wishlist-action">
                    <a class="cart-wishlist-viewcart" href="{$cart_url}">view cart</a>
                    <a class="cart-wishlist-checkout" href="{$urls.pages.order}">{l s='Check Out' d='Shop.Theme.Actions'}</a>
                </div>
            </div> 
        {else}
            <div class="ht_cart cart-hover-content">
                <p class="no-item">There is no itme in your cart.</p>
            </div>
        {/if}
        <div class="header">
            {if $cart.products_count > 0}
                <a rel="nofollow" href="{$cart_url}">
                {/if}
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                <span class="hidden-sm-down">{l s='Cart' d='Shop.Theme.Checkout'}</span>
                <span class="cart-products-count">({$cart.products_count})</span>
                {if $cart.products_count > 0}
                </a>
            {/if}
        </div>
    </div>
</div>
