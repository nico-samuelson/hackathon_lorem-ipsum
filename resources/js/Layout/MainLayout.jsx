import React, { useContext, useState } from "react";
import { ConfigProvider } from "antd";
import { Head } from "@inertiajs/react";
import "../../css/tailwind.css";
import "../../css/app.css";

export default function MainLayout({ children }) {
    // const {isMobile} = useMobileContext()
    // console.log(isMobile)
    // window.onreisze = () => {
    //     setIsMobile(window.innerWidth < 768)
    // }

    return (
        <ConfigProvider>
            <Head>
                <link
                    rel="stylesheet"
                    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css"
                />

                <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

                <style>
                    {`
                html, body {
                    margin: 0 !important;
                    padding: 0 !important;
                }
                .app {
                    min-height: 100vh;
                }
                .ant-layout-has-sider {
                    min-height: 100vh;
                }

                


            `}
                </style>
            </Head>

            {/* <MobileContextProvider> */}

            <nav
                className="relative flex w-full flex-wrap items-center justify-between py-5 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 lg:py-5 sticky top-0 z-50"
                data-te-navbar-ref
                style= {{ background: 'transparent' }}
            >
                <div className="flex w-full flex-wrap items-center justify-between px-3">
                    <div>
                        <a
                            className="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
                            href={ route('home') }
                        >
                            <img
                                className="mr-2"
                                src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp"
                                style={{ height: '20px' }}
                                alt="TE Logo"
                                loading="lazy"
                            />
                        </a>
                    </div>

                    <button
                        className="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                        type="button"
                        data-te-collapse-init
                        data-te-target="#navbarSupportedContent4"
                        aria-controls="navbarSupportedContent4"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span className="[&>svg]:w-7">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="black"
                                className="h-7 w-7"
                            >
                                <path
                                    fillRule="evenodd"
                                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                    clipRule="evenodd"
                                />
                            </svg>
                        </span>
                    </button>

                    <div
                        className="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
                        id="navbarSupportedContent4"
                        data-te-collapse-item
                    >
                        <ul
                            className="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row"
                            data-te-navbar-nav-ref
                        >
                            <li
                                className="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
                                data-te-nav-item-ref
                            >
                                <a
                                    className="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                    aria-current="page"
                                    href={ route('home') }
                                    data-te-nav-link-ref
                                >
                                    Home
                                </a>
                            </li>
                            <li
                                className="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
                                data-te-nav-item-ref
                            >
                                <a
                                    className="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                    aria-current="page"
                                    href={ route('pesan') }
                                    data-te-nav-link-ref
                                >
                                    Produk Kami
                                </a>
                            </li>
                        </ul>

                        <div className="flex items-center">
                            <a
                                href={ route('login') }
                                type="button"
                                data-te-ripple-init
                                data-te-ripple-color="light"
                                className="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-100 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none"
                            >
                                Login
                            </a>
                            <a
                                href={ route('daftar-member-view') }
                                type="button"
                                data-te-ripple-init
                                data-te-ripple-color="light"
                                className="mr-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            >
                                JOIN US
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            {children}
            {/* </MobileContextProvider> */}
        </ConfigProvider>
    );
}
