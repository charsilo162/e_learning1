{{-- 
    Component: Contact Footer
    Usage:
    <x-contact-footer 
        :phone="'+08453889243'"
        email="info@etraining.net"
        address="3 Walker Street, Edinburgh, EH3 7JY"
        :social="[
            'LinkedIn' => '#',
            'X (formerly Twitter)' => '#',
            'YouTube' => '#'
        ]"
    />
--}}

@props([
    'phone' => '+08453889243',
    'email' => 'info@etraining.net',
    'address' => '3 Walker Street, Edinburgh, EH3 7JY',
    'social' => [],
])

<div class="bg-gray-50 py-16 px-6 sm:px-8 lg:px-16">
    <div class="max-w-screen-xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-16">

            <!-- Contact Details -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Contact Details</h3>

                <div class="mb-4 flex items-center">
                    <x-icon.phone class="w-5 h-5 text-blue-500 mr-2" />
                    <p class="text-gray-600">
                        <strong>Phone:</strong> 
                        <a href="tel:{{ $phone }}" class="text-blue-500 hover:underline">{{ $phone }}</a>
                    </p>
                </div>

                <div class="mb-4 flex items-center">
                    <x-icon.email class="w-5 h-5 text-blue-500 mr-2" />
                    <p class="text-gray-600">
                        <strong>Email:</strong> 
                        <a href="mailto:{{ $email }}" class="text-blue-500 hover:underline">{{ $email }}</a>
                    </p>
                </div>

                <div class="mb-4 flex items-center">
                    <x-icon.location class="w-5 h-5 text-blue-500 mr-2" />
                    <p class="text-gray-600">
                        <strong>Address:</strong> {{ $address }}
                    </p>
                </div>

                @if (!empty($social))
                    <div class="mt-6">
                        <h4 class="text-lg font-semibold text-gray-800">We are Social</h4>
                        <div class="flex space-x-4 mt-2">
                            @foreach ($social as $platform => $url)
                                <a href="{{ $url }}" 
                                   class="text-blue-500 hover:text-gray-700 transition-colors"
                                   target="_blank" rel="noopener">
                                    {{ $platform }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- Contact Form -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Contact Us</h3>
                <x-form.contact />
            </div>

            <!-- Privacy Statement -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Privacy Statement</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    A privacy statement is a formal document that outlines how an organization collects, uses, discloses, and protects personal information. It typically details the types of data collected, the purpose of data collection, data sharing practices, security measures, and users' rights regarding their information.
                </p>
            </div>

        </div>
    </div>
</div>