import { Head } from "@inertiajs/react";
import MainLayout from "../Layout/MainLayout";
import React, { useContext, useState } from "react";
import { ConfigProvider, Row, Col, Card, Image, Space } from "antd";
import {
    DownloadOutlined,
    RotateLeftOutlined,
    RotateRightOutlined,
    SwapOutlined,
    ZoomInOutlined,
    ZoomOutOutlined,
} from "@ant-design/icons";

export default function Pesan({ produk }) {
    const { isMobile, setIsMobile } = useState(null);
    const { cart, setCart } = useState([]);

    console.log(isMobile);
    window.onresize = () => {
        setIsMobile(window.innerWidth < 768);
    };
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
                        }
                        #produk{
                            margin-left: 10%;
                            margin-right:10%;
                        }
                        #container{
                            margin-top: 6vh;
                        }
                        .produk-card{
                            margin-bottom: 2vh;
                        }
                        .image-produk{
                            width:19vw !important;
                            height:19vw !important;
                        }
                        .harga-produk{
                            text-align:right;
                        }
                    `}
                </style>
            </Head>
            <MainLayout>
                <Row id="container">
                    <Col span={16}>
                        <div id="produk">
                            {produk.map((item, index) => (
                                <Card
                                    bordered={false}
                                    className="produk-card"
                                    style={{}}
                                    key={index}
                                >
                                    <Row>
                                        <Col span={10}>
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
                                        <Col span={14}>
                                            <div id="detail-container">
                                                <h1>{item.nama}</h1>
                                                <p>
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
                                                <h2 className="harga-produk">
                                                    {item.harga}
                                                </h2>
                                                <div className="btn-quantity"></div>
                                            </div>
                                        </Col>
                                    </Row>
                                </Card>
                            ))}
                        </div>
                    </Col>
                    <Col span={8}>
                        <div id="total">Ini Sidebar</div>
                    </Col>
                </Row>
            </MainLayout>
        </>
    );
}
