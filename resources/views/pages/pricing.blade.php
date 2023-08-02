@extends('layouts.web')

@section('title', 'Pricing')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<section class="container py-6 px-4 mx-auto" x-data="datatables()" x-cloak>
    <h1 class="text-3xl font-semibold py-8 text-primary-one text-center">Pricing</h1>

    <div class="overflow-x-auto lg:overflow-x-hidden bg-white border border-primary-one shadow-lg overflow-y-auto relative"
        style="">
        <table class="border-collapse table-auto w-full whitespace-no-wrap table-striped relative">
            <thead>
                <tr class="text-center">

                    <template x-for="heading in headings">
                        <th class="bg-primary-one sticky top-0 px-6 py-4 text-white font-bold tracking-wider  text-sm"
                            x-text="heading.value" :x-ref="heading.key" :class="{ [heading.key]: true }"></th>
                    </template>
                </tr>
            </thead>
            <tbody>
                <template x-for="user in users" :key="user.userId">
                    <tr class="hover:bg-primary-two hover:text-white text-base">

                        <td class="border border-t border-primary-one urgency">
                            <span class="px-6 py-3 flex justify-center items-center text-gray-800 hover:text-white" x-text="user.urgency"></span>
                        </td>
                        <td class="border border-t border-primary-one highschool">
                            <span class=" px-6 py-3 flex justify-center items-center" x-text="user.highschool"></span>
                        </td>
                        <td class="border border-t border-primary-one undergraduate">
                            <span class=" px-6 py-3 flex justify-center items-center"
                                x-text="user.undergraduate"></span>
                        </td>
                        <td class="border border-t border-primary-one master">
                            <span class=" px-6 py-3 flex justify-center items-center"
                                x-text="user.master"></span>
                        </td>

                    </tr>
                </template>
            </tbody>
        </table>


    </div>
    <div class="mt-6 flex flex-col justify-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
        <a href="javascript:void(Tawk_API.toggle())" class="btn bg-primary-two ">
            Live Chat
        </a>
        <a href="{{ route('order') }}" class="btn bg-primary-one ">
            Order Now
        </a>
      </div>
</section>

<script>
    function datatables() {
        return {
            headings: [

                {
                    'key': 'urgency',
                    'value': 'URGENCY'
                },
                {
                    'key': 'highschool',
                    'value': 'High School (STANDARD)'
                },
                {
                    'key': 'undergraduate',
                    'value': 'Undergraduate (PREMIUM)'
                },
                {
                    'key': 'master',
                    'value': 'Master (PLATINUM)'
                }

            ],
            users: [{
                "userId": 1,
                "urgency": "15 Days+",
                "highschool": "$ 4",
                "undergraduate": "$ 6",
                "master": "$ 8"

            }, {
                "userId": 2,
                "urgency": "10 Days",
                "highschool": "$ 7",
                "undergraduate": "$ 8",
                "master": "$ 9"
            }, {
                "userId": 3,
                "urgency": "8 Days",
                "highschool": "$ 9",
                "undergraduate": "$ 10",
                "master": "$ 11"
            }, {
                "userId": 4,
                "urgency": "6 Days",
                "highschool": "$ 11",
                "undergraduate": "$ 12",
                "master": "$ 13"
            }, {
                "userId": 5,
                "urgency": "5 Days",
                "highschool": "$ 13",
                "undergraduate": "$ 14",
                "master": "$ 15"
            }, {
                "userId": 6,
                "urgency": "4 Days",
                "highschool": "$ 15",
                "undergraduate": "$ 16",
                "master": "$ 17"
            }, {
                "userId": 7,
                "urgency": "3 Days",
                "highschool": "$ 17",
                "undergraduate": "$ 18",
                "master": "$ 19"
            }, {
                "userId": 8,
                "urgency": "48Hours",
                "highschool": "$ 19",
                "undergraduate": "$ 20",
                "master": "$ 21"
            }, {
                "userId": 9,
                "urgency": "24Hours",
                "highschool": "$ 21",
                "undergraduate": "$ 22",
                "master": "$ 23"
            }, {
                "userId": 10,
                "urgency": "12 Hours",
                "highschool": "$ 23",
                "undergraduate": "$ 24",
                "master": "$ 25"
            }, {
                "userId": 11,
                "urgency": "6 Hours",
                "highschool": "$ 25",
                "undergraduate": "$ 26",
                "master": "$ 27"
            }],
            selectedRows: [],

            open: false,

            toggleColumn(key) {
                // Note: All td must have the same class name as the headings key!
                let columns = document.querySelectorAll('.' + key);

                if (this.$refs[key].classList.contains('hidden') && this.$refs[key].classList.contains(key)) {
                    columns.forEach(column => {
                        column.classList.remove('hidden');
                    });
                } else {
                    columns.forEach(column => {
                        column.classList.add('hidden');
                    });
                }
            },

            getRowDetail($event, id) {
                let rows = this.selectedRows;

                if (rows.includes(id)) {
                    let index = rows.indexOf(id);
                    rows.splice(index, 1);
                } else {
                    rows.push(id);
                }
            },

            selectAllCheckbox($event) {
                let columns = document.querySelectorAll('.rowCheckbox');

                this.selectedRows = [];

                if ($event.target.checked == true) {
                    columns.forEach(column => {
                        column.checked = true
                        this.selectedRows.push(parseInt(column.name))
                    });
                } else {
                    columns.forEach(column => {
                        column.checked = false
                    });
                    this.selectedRows = [];
                }
            }
        }
    }
</script>

@endsection
