<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border bg-white border-neutral-200 dark:border-neutral-700">
                <h1 class="p-4 text-md font-semibold">Dashboard Siswa</h1>
                <div class="bg-black">
                    
                </div>
                <div class="space-between p-4 -mt-8 mb-2">
                    <div class="flex justify-between items-center">
                        <div>
                            <h1>Awal</h1>
                        </div>
                        <div>
                            <h1>Akhir</h1>
                        </div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
                    <div class="mt-4">
                        <h1>Waktu Tersisa</h1>
                        <p class="font-s">250 Hari</p>
                    </div>
                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
    </div>
</x-layouts.app>
