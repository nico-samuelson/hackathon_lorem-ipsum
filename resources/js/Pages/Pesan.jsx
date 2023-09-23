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

export default function Pesan({ produk }) {
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

    const src =
        "https://zos.alipayobjects.com/rmsportal/jkjgkEfvpUPVyRjUImniVslZfWPnJuuZ.png";
    const onDownload = () => {
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
                                                    src={src}
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
                                                <h1 className="text-2xl font-bold mb-2">{item.nama}</h1>
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
                                <div
                                    className="float-right text-2xl font-bold pt-8"
                                >
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
