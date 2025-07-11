import { Alert, AlertDescription, AlertTitle } from '@/components/ui/alert';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Textarea } from '@/components/ui/textarea';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/react';
import { Terminal } from 'lucide-react';
import React, { FormEvent } from 'react';
import { CircleAlert } from 'lucide-react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Create a New Module',
        href: '/modules/create',
    },
];

export default function Index() {

    const{data, setData, post, processing, errors } = useForm({
        name: '',
        price: '',
        description: ''
    });

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        post(route('modules.store'));
    }

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Create a New Modules" />
            <div className='w-8/12 p-4'>
                <form onSubmit={handleSubmit} className='space-y-4' >
                    {/* Display error*/}

                    {Object.keys(errors).length > 0 &&(
                      <Alert>
                        <CircleAlert className='h-4 w-4'/>
                        <AlertTitle>Errors!</AlertTitle>
                        <AlertDescription>
                            <ul>
                                {Object.entries(errors).map(([key, massage]) => (
                                    <li key={key}>{massage as string}</li>
                                ))}
                            </ul>
                        </AlertDescription>
                      </Alert>  
                    )}
                    <div className='gap-1.5'>
                        <Label htmlFor='module name'>Name</Label>
                        <Input placeholder='Module Name' value={data.name} onChange={(e) => setData('name', e.target.value)}></Input>
                    </div>
                    <div className='gap-1.5'>
                        <Label htmlFor='module price'>Price</Label>
                        <Input placeholder='Price' value={data.price} onChange={(e) => setData('price', e.target.value)}></Input>
                    </div>
                    <div className='gap-1.5'>
                        <Label htmlFor='module description'>Description</Label>
                        <Textarea placeholder='Description' value={data.description} onChange={(e) => setData('description', e.target.value)}/>
                    </div>
                    <Button type='submit'>Add Module</Button>
                </form>
            </div>
        </AppLayout>
    );
}