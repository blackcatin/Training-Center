import { Button } from '@/components/ui/button';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Modules',
        href: '/modules',
    },
];

export default function Index() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Modules" />
            <div className='m-4'>
                <Link href={route('modules.create')}><Button>Create a Module</Button></Link>
            </div>
        </AppLayout>
    );
}