import { Head } from "@inertiajs/react";
import MainLayout from "../Layout/MainLayout";
import { ConfigProvider, Row, Col, Card, Image, Space, Button } from "antd";
import { PlusCircleFilled, MinusCircleFilled } from "@ant-design/icons";
import {
    DownloadOutlined,
    RotateLeftOutlined,
    RotateRightOutlined,
    SwapOutlined,
    ZoomInOutlined,
    ZoomOutOutlined,
} from "@ant-design/icons";
import React from "react";
import { useState } from "react";

export default function Pesan({ produk, isLoggedIn }) {
    const [productsCount, setProductsCount] = useState(
        Array.from(Array(produk.length).fill(0))
    );

    const addItem = (idx) => {
        setProductsCount((prev) => {
            let newProductsCount = [...prev];
            newProductsCount[idx]++;
            return newProductsCount;
        });
    };

    const hargaToInt = (harga) => {
        let newHarga = harga.slice(4);
        newHarga = newHarga.replace(".", "");
        return parseInt(newHarga);
    };

    const removeItem = (idx) => {
        setProductsCount((prev) => {
            let newProductsCount = [...prev];
            newProductsCount[idx]--;
            return newProductsCount;
        });
    };

    let totalPrice = 0;
    produk.map((p, idx) => {
        totalPrice += hargaToInt(p.harga) * productsCount[idx];
    });

    let chat = "Permisi Pak/Bu, saya ingin membeli \n";
    produk.map((item, idx) => {
        chat += `${productsCount[idx]} ${item.nama}\n`;
    });

    const onDownload = (src) => {
        fetch(src)
            .then((response) => response.blob())
            .then((blob) => {
                const url = URL.createObjectURL(new Blob([blob]));
                const link = document.createElement("a");
                link.href = url;
                link.download = "image.png";
                document.body.appendChild(link);
                link.click();
                URL.revokeObjectURL(url);
                link.remove();
            });
    };

    return (
        <>
            <Head>
                <style>
                    {`
                        html, body {
                            margin: 0 !important;
                            padding: 0 !important;
                            overflow-x: hidden !important;
                        }
                        #produk{
                            margin-left: 6%;
                            margin-right:4%;
                        }
                        #container{
                            margin-top: 6vh;
                        }
                        .produk-card{
                            margin-bottom: 2vh;
                        }
                        .image-produk{
                            width:220px !important;
                            height:220px !important;
                        }
                        .harga-produk{
                            text-align:right;
                        }
                        .total-card {
                            height: 210px;
                            margin-right: 6%;
                            margin-bottom: 20px;
                        }
                        .button-pesan-sekarang {
                            margin-right: 6%;
                        }
                        .gradient-bg {
                            background: linear-gradient(to bottom, #F39A25, #F4C21E);
                            border-radius: 30pt 30pt 0 0;
                        }


                        @media (max-width: 992px) {
                            #produk {
                                margin-right: 6%;
                            }
                            .total-card {
                                margin-inline: 12%; 
                            }
                            .button-pesan-sekarang {
                                margin-inline: 12%;
                            }
                        }

                        @media (max-width: 576px) {
                            .total-card {
                                font-size: 20px;
                            }
                        }
                    `}
                </style>
                <title>Pesan Produk | Etawa</title>
            </Head>

            <div
                className="gradient-bg"
                style={{
                    position: "absolute",
                    top: "50%",
                    height: `${350 * produk.length}px`,
                    width: "100vw",
                }}
            ></div>
            <MainLayout>
                <nav
                    className="relative flex w-full flex-wrap items-center justify-between py-5 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 lg:py-5 sticky top-0 z-50"
                    data-te-navbar-ref
                    style={{ background: "transparent" }}
                >
                    <div className="flex w-full flex-wrap items-center justify-between px-3">
                        <div>
                            <a
                                className="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
                                href={route("home")}
                            >
                                <img
                                    className="mr-2"
                                    src="/logo.png"
                                    style={{ height: "20px" }}
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
                                        href={route("home")}
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
                                        href={route("pesan")}
                                        data-te-nav-link-ref
                                    >
                                        Produk Kami
                                    </a>
                                </li>
                            </ul>

                            <div className="flex items-center">
                                {(() => {
                                    if (isLoggedIn) {
                                        return (
                                            <a
                                                href={route(
                                                    "logout"
                                                )}
                                                type="button"
                                                data-te-ripple-init
                                                data-te-ripple-color="light"
                                                className="mr-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                            >
                                                LOGOUT
                                            </a>
                                        );
                                    } else {
                                        return (
                                            <>
                                                <a
                                                    href={route("login")}
                                                    type="button"
                                                    data-te-ripple-init
                                                    data-te-ripple-color="light"
                                                    className="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-100 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none"
                                                >
                                                    Login
                                                </a>
                                                <a
                                                    href={route(
                                                        "daftar-member-view"
                                                    )}
                                                    type="button"
                                                    data-te-ripple-init
                                                    data-te-ripple-color="light"
                                                    className="mr-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                >
                                                    JOIN US
                                                </a>
                                            </>
                                        );
                                    }
                                })()}
                            </div>
                        </div>
                    </div>
                </nav>
                <Row id="container">
                    <Col xs={{ span: 24 }} lg={{ span: 16 }}>
                        <div id="produk">
                            {produk.map((item, index) => (
                                <Card
                                    bordered={false}
                                    className="produk-card"
                                    style={{ backgroundColor: "#FCD75F" }}
                                    key={index}
                                >
                                    <Row>
                                        <Col
                                            xs={{ span: 24 }}
                                            md={{ span: 10 }}
                                        >
                                            <div id="image-container">
                                                <Image
                                                    className="image-produk"
                                                    src={route(
                                                        "assets.foto_produk",
                                                        { path: item.foto }
                                                    )}
                                                    preview={{
                                                        toolbarRender: (
                                                            _,
                                                            {
                                                                transform: {
                                                                    scale,
                                                                },
                                                                actions: {
                                                                    onFlipY,
                                                                    onFlipX,
                                                                    onRotateLeft,
                                                                    onRotateRight,
                                                                    onZoomOut,
                                                                    onZoomIn,
                                                                },
                                                            }
                                                        ) => (
                                                            <Space
                                                                size={12}
                                                                className="toolbar-wrapper"
                                                            >
                                                                <DownloadOutlined
                                                                    onClick={
                                                                        onDownload
                                                                    }
                                                                />
                                                                <SwapOutlined
                                                                    rotate={90}
                                                                    onClick={
                                                                        onFlipY
                                                                    }
                                                                />
                                                                <SwapOutlined
                                                                    onClick={
                                                                        onFlipX
                                                                    }
                                                                />
                                                                <RotateLeftOutlined
                                                                    onClick={
                                                                        onRotateLeft
                                                                    }
                                                                />
                                                                <RotateRightOutlined
                                                                    onClick={
                                                                        onRotateRight
                                                                    }
                                                                />
                                                                <ZoomOutOutlined
                                                                    disabled={
                                                                        scale ===
                                                                        1
                                                                    }
                                                                    onClick={
                                                                        onZoomOut
                                                                    }
                                                                />
                                                                <ZoomInOutlined
                                                                    disabled={
                                                                        scale ===
                                                                        50
                                                                    }
                                                                    onClick={
                                                                        onZoomIn
                                                                    }
                                                                />
                                                            </Space>
                                                        ),
                                                    }}
                                                />
                                            </div>
                                        </Col>
                                        <Col
                                            xs={{ span: 24 }}
                                            md={{ span: 14 }}
                                        >
                                            <div id="detail-container">
                                                <h1 className="text-2xl font-bold mb-2">
                                                    {item.nama}
                                                </h1>
                                                <p className="text-[13px]">
                                                    {item.deskripsi.length >=
                                                        150 &&
                                                        item.deskripsi.substring(
                                                            0,
                                                            150
                                                        ) + " ..."}
                                                    {item.deskripsi.length <
                                                        150 && item.deskripsi}
                                                </p>
                                                <br></br>
                                                <h2 className="harga-produk text-2xl font-bold mb-2">
                                                    {item.harga}
                                                </h2>
                                                <div
                                                    className="btn-quantity"
                                                    style={{
                                                        display: "flex",
                                                        justifyItems: "center",
                                                        float: "right",
                                                    }}
                                                >
                                                    <MinusCircleFilled
                                                        style={{
                                                            fontSize: "40px",
                                                        }}
                                                        onClick={() =>
                                                            removeItem(index)
                                                        }
                                                    />
                                                    <div
                                                        style={{
                                                            display: "flex",
                                                            marginInline:
                                                                "24px",
                                                        }}
                                                    >
                                                        <span
                                                            style={{
                                                                marginBlock:
                                                                    "auto",
                                                                fontSize:
                                                                    "28px",
                                                                fontWeight:
                                                                    "400",
                                                            }}
                                                        >
                                                            {
                                                                productsCount[
                                                                    index
                                                                ]
                                                            }
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <PlusCircleFilled
                                                            style={{
                                                                fontSize:
                                                                    "40px",
                                                            }}
                                                            onClick={() =>
                                                                addItem(index)
                                                            }
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </Col>
                                    </Row>
                                </Card>
                            ))}
                        </div>
                    </Col>
                    <Col xs={{ span: 24 }} lg={{ span: 8 }}>
                        <Card
                            bordered={false}
                            className="total-card"
                            style={{ backgroundColor: "#FCD75F" }}
                        >
                            <div>
                                <div className="mb-16">
                                    <div className="font-bold text-2xl">
                                        Total :
                                    </div>
                                    <div className="font-normal  text-2xl">
                                        {productsCount.reduce(
                                            (partialSum, a) => partialSum + a,
                                            0
                                        )}{" "}
                                        Produk
                                    </div>
                                </div>
                                <div className="float-right text-2xl font-bold pt-8">
                                    Rp{totalPrice.toLocaleString("id-ID")}
                                </div>
                            </div>
                        </Card>
                        <a
                            href={
                                "https://wa.me/6281332050695/?" +
                                new URLSearchParams({ text: chat })
                            }
                        >
                            <div
                                style={{ marginBottom: "28px" }}
                                className="button-pesan-sekarang"
                            >
                                <Button
                                    block
                                    style={{
                                        fontWeight: "400",
                                        fontSize: "18px",
                                        height: "40px",
                                        backgroundColor: "#EB8600",
                                        color: "#ffffff",
                                    }}
                                >
                                    Pesan Sekarang
                                </Button>
                            </div>
                        </a>
                    </Col>
                </Row>
            </MainLayout>
        </>
    );
}
