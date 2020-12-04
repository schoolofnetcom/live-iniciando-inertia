import React, { useEffect } from 'react'
import { InertiaLink, usePage } from '@inertiajs/inertia-react'

export default function Layout({ title, children }) {
    console.log(title)
    useEffect(() => {
    document.title = title;
    }, [title])

    const { loggedUser, users } = usePage().props;
    // console.log(usePage().props);

    return (
        <main>
            <header>
                <div>Olá {loggedUser}</div>
                <div>Usuários cadastrados {users}</div>
                <nav>
                    <InertiaLink href={route('page.home')}>Home | </InertiaLink>
                    <InertiaLink href={route('page.about')}>About | </InertiaLink>
                    <InertiaLink href={route('page.contact')}>Contact</InertiaLink>
                </nav>
            </header>

            <article>
                {children}
            </article>
        </main>
    )
}
