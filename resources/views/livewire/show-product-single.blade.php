<div>
    <div x-data="{
        billingType: 'month',
        basicPrice: '19',
        premiumPrice: '29',
        proPrice: '39'
    }" class="min-h-full bg-gray-200 pb-12">
        <div class="w-full bg-blue-900 pt-16 pb-24 text-center">
            <h4 class="text-2xl text-gray-100">Choose the right plan for you</h4>
            <p class="text-sm text-gray-100 mt-2">Pricing built for businesses of all sizes. Choose package that suits your needs.</p>
            <div class="flex items-center justify-center mt-8">
                <button @click="
                    billingType = 'month',
                    basicPrice = '19',
                    premiumPrice = '29',
                    proPrice = '39'
                " class="text-gray-800 px-4 py-2 rounded-tl-lg rounded-bl-lg bg-gray-200" :class=" billingType === 'month' ? 'bg-blue-300' : 'bg-gray-200' " title="Choose Monthly billing">
                    Monthly billing
                </button>
                <button @click="
                    billingType = 'year',
                    basicPrice = '205',
                    premiumPrice = '313',
                    proPrice = '421'
                " class="text-gray-800 px-4 py-2 rounded-tr-lg rounded-br-lg bg-gray-200" :class=" billingType === 'year' ? 'bg-blue-300' : 'bg-gray-200' " title="Choose Annual billing">
                    Annual billing
                </button>
            </div>
        </div>
        <div class="w-full 2xl:w-3/4 flex items-center justify-center px-8 md:px-32 lg:px-16 2xl:px-0 mx-auto -mt-8">
            <div class="w-full grid grid-cols-1 xl:grid-cols-3 gap-8">
                <div class="bg-white shadow-2xl rounded-lg py-4">
                    <p class="text-xl text-center font-bold text-blue-600">Basic</p>
                    <p class="text-center py-8">
                    <span class="text-4xl font-bold text-gray-700">
                        $<span x-text="basicPrice">19</span>
                    </span>
                        <span class="text-xs uppercase text-gray-500">
                        / <span x-text="billingType">month</span>
                    </span>
                    </p>
                    <ul class="border-t border-gray-300 py-8 space-y-6">
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Free Setup Guidance</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Email Support</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">User Management</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Reports</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-400 capitalize">Unlimited Users</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-400 capitalize">Data Export</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-400 capitalize">Automated Workflows</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-400 capitalize">API Access</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center mt-6">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150" title="Purchase">Purchase</a>
                    </div>
                </div>
                <div class="bg-white shadow-2xl rounded-lg py-4">
                    <p class="text-xl text-center font-bold text-blue-600">Premium</p>
                    <p class="text-center py-8">
                    <span class="text-4xl font-bold text-gray-700">
                        $<span x-text="premiumPrice">29</span>
                    </span>
                        <span class="text-xs uppercase text-gray-500">
                        / <span x-text="billingType">month</span>
                    </span>
                    </p>
                    <ul class="border-t border-gray-300 py-8 space-y-6">
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Free Setup Guidance</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Email Support</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">User Management</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Reports</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Unlimited Users</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Data Export</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-400 capitalize">Automated Workflows</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-400 capitalize">API Access</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center mt-6">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150" title="Purchase">Purchase</a>
                    </div>
                </div>
                <div class="bg-white shadow-2xl rounded-lg py-4">
                    <p class="text-xl text-center font-bold text-blue-600">Pro</p>
                    <p class="text-center py-8">
                    <span class="text-4xl font-bold text-gray-700">
                        $<span x-text="proPrice">39</span>
                    </span>
                        <span class="text-xs uppercase text-gray-500">
                        / <span x-text="billingType">month</span>
                    </span>
                    </p>
                    <ul class="border-t border-gray-300 py-8 space-y-6">
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Free Setup Guidance</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Email Support</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">User Management</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Reports</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Unlimited Users</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Data Export</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">Automated Workflows</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                            <span class="text-gray-600 capitalize">API Access</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center mt-6">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150" title="Purchase">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
