<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script> 
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Shopping Cart</title>
</head>
<body>
  <div class="bg-white">
    <p class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">Get free delivery on orders over $100</p>    <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
              <div class="flex h-16 items-center">
                <button type="button" x-description="Mobile menu toggle, controls the 'mobileMenuOpen' state." class="rounded-md bg-white p-2 text-gray-400 lg:hidden" @click="open = true">
                  <span class="sr-only">Open menu</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/bars-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
    </svg>
                </button>
     
                <!-- Logo -->
                <div class="ml-4 flex lg:ml-0">
                  <a href="http://localhost:8000/shop">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&amp;shade=600" alt="">
                  </a>
                </div>
     
                <!-- Flyout menus -->
                <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                  <div class="flex h-full space-x-8">
                     
                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Women</a>
                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Men</a>
                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                     
                  </div>
                </div>
     
                <div class="ml-auto flex items-center">
                  <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                    <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                  </div>
 
                   
             
                  <!-- Cart -->
                  <div class="ml-4 flow-root lg:ml-6">
                    <a href="http://localhost:8000/shop/cart" class="group -m-2 flex items-center p-2">
                      <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: outline/shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
    </svg>
                      <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">$ 129</span>
                      <span class="sr-only">items in cart, view bag</span>
                    </a>
                  </div>
 
                   
                </div>
              </div>
            </div>
          </nav>        <main class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h2>
    <form class="mt-12 lg:grid lg:grid-cols-12 lg:items-start lg:gap-x-12 xl:gap-x-16">
      <section aria-labelledby="cart-heading" class="lg:col-span-7">
        <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
 
        <ul id="cart" role="list" class="divide-y divide-gray-200 border-t border-b border-gray-200">
 
         
 
     
         
          <li class="flex py-6 sm:py-10" data-id="3">
            <div class="flex-shrink-0">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-04.jpg" alt="Front of men&#039;s Basic Tee in sienna." class="h-24 w-24 rounded-md object-cover object-center sm:h-48 sm:w-48">
            </div>
 
            <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
              <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                <div>
                  <div class="flex justify-between">
                    <h3 class="text-sm">
                      <a href="#" class="font-medium text-gray-700 hover:text-gray-800">Mini-Sketchbooks</a>
                    </h3>
                  </div>
                  <div class="mt-1 flex text-sm">
                    <p class="text-gray-500">Sienna</p>
 
                    <p class="ml-4 border-l border-gray-200 pl-4 text-gray-500">Large</p>
                  </div>
                  <p class="mt-1 text-sm font-medium text-gray-900">$27.00</p>
                </div>
 
                <div class="mt-4 sm:mt-0 sm:pr-9">
                  <label for="quantity-0" class="sr-only">Quantity, Basic Tee</label>
                  <input type="number" value="2" class="quantity update-cart w-1/3 rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm" />
                  <div class="actions absolute top-0 right-0">
                    <button type="button" class="remove-from-cart -m-2 inline-flex p-2 text-gray-400 hover:text-gray-500">
                      <span class="sr-only ">Remove</span>
                      <!-- Heroicon name: mini/x-mark -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
    
         
          <li class="flex py-6 sm:py-10" data-id="1">
            <div class="flex-shrink-0">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Front of men&#039;s Basic Tee in sienna." class="h-24 w-24 rounded-md object-cover object-center sm:h-48 sm:w-48">
            </div>
 
            <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
              <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                <div>
                  <div class="flex justify-between">
                    <h3 class="text-sm">
                      <a href="#" class="font-medium text-gray-700 hover:text-gray-800">Leather Long Wallet</a>
                    </h3>
                  </div>
                  <div class="mt-1 flex text-sm">
                    <p class="text-gray-500">Sienna</p>
 
                    <p class="ml-4 border-l border-gray-200 pl-4 text-gray-500">Large</p>
                  </div>
                  <p class="mt-1 text-sm font-medium text-gray-900">$75.00</p>
                </div>
 
                <div class="mt-4 sm:mt-0 sm:pr-9">
                  <label for="quantity-0" class="sr-only">Quantity, Basic Tee</label>
                  <input type="number" value="1" class="quantity update-cart w-1/3 rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm" />
                  <div class="actions absolute top-0 right-0">
                    <button type="button" class="remove-from-cart -m-2 inline-flex p-2 text-gray-400 hover:text-gray-500">
                      <span class="sr-only ">Remove</span>
                      <!-- Heroicon name: mini/x-mark -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
    
                   
        </ul>
      </section>
 
      <!-- Order summary -->
      <section aria-labelledby="summary-heading" class="mt-16 rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:col-span-5 lg:mt-0 lg:p-8">
        <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>
 
        <dl class="mt-6 space-y-4">
          <div class="flex items-center justify-between">
            <dt class="text-sm text-gray-600">Subtotal</dt>
            <dd class="text-sm font-medium text-gray-900">
            $129
        </dd>
          </div>
          <div class="flex items-center justify-between border-t border-gray-200 pt-4">
            <dt class="flex items-center text-sm text-gray-600">
              <span>Shipping estimate</span>
              <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                <span class="sr-only">Learn more about how shipping is calculated</span>
                <!-- Heroicon name: mini/question-mark-circle -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
              </a>
            </dt>
            <dd class="text-sm font-medium text-gray-900">$0.00</dd>
          </div>
    
          <div class="flex items-center justify-between border-t border-gray-200 pt-4">
            <dt class="text-base font-medium text-gray-900">Order total</dt>
            <dd class="text-base font-medium text-gray-900">$129</dd>
          </div>
        </dl>
 
        <div class="mt-6">
         
          <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 py-3 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</button>
        </div>
        <div class="mt-6 text-center text-sm">
          <p>
            or
            <a href="http://localhost:8000/shop" class="font-medium text-indigo-600 hover:text-indigo-500">
              Continue Shopping
              <span aria-hidden="true"> &rarr;</span>
            </a>
          </p>
        </div>
      </section>
    </form>
  </div>
</div>
</main>    <footer aria-labelledby="footer-heading" class="bg-white">
          <h2 id="footer-heading" class="sr-only">Footer</h2>
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-t border-gray-200 py-20">
              <div class="grid grid-cols-1 md:grid-flow-col md:auto-rows-min md:grid-cols-12 md:gap-x-8 md:gap-y-16">
                <!-- Image section -->
                <div class="col-span-1 md:col-span-2 lg:col-start-1 lg:row-start-1">
                  <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="" class="h-8 w-auto">
                </div>
     
                <!-- Sitemap sections -->
                <div class="col-span-6 mt-10 grid grid-cols-2 gap-8 sm:grid-cols-3 md:col-span-8 md:col-start-3 md:row-start-1 md:mt-0 lg:col-span-6 lg:col-start-2">
                  <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">Products</h3>
                      <ul role="list" class="mt-6 space-y-6">
                         
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>
                          </li>
                         
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>
                          </li>
                         
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>
                          </li>
                                                 
                      </ul>
                    </div>
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">Company</h3>
                      <ul role="list" class="mt-6 space-y-6">
                         
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                          </li>
                                  
                                                  
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp; Conditions</a>
                          </li>
                         
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                          </li>
                         
                      </ul>
                    </div>
                  </div>
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                    <ul role="list" class="mt-6 space-y-6">
                       
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>
                        </li>
                       
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>
                        </li>
                       
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Returns</a>
                        </li>
                       
                    </ul>
                  </div>
                </div>
     
                <!-- Newsletter section -->
                <div class="mt-12 md:col-span-8 md:col-start-3 md:row-start-2 md:mt-0 lg:col-span-4 lg:col-start-9 lg:row-start-1">
                  <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
                  <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
                  <form class="mt-2 flex sm:max-w-md">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" type="text" autocomplete="email" required="" class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                    <div class="ml-4 flex-shrink-0">
                      <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
     
            <div class="border-t border-gray-100 py-10 text-center">
              <p class="text-sm text-gray-500">© 2021 Your Company, Inc. All rights reserved.</p>
            </div>
          </div>
        </footer>  
    </div>
 
</body>
</html>