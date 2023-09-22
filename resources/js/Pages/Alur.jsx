import { Head } from "@inertiajs/react";
import MainLayout from "../Layout/MainLayout";
import { ClockCircleOutlined } from '@ant-design/icons';
import { Avatar, Popover } from 'antd';
import { useState, useContext } from "react";
import React from 'react'
import { useMobileContext } from "../Context/MobileContext";

export default function Alur() {
    const mobile = useMobileContext()

    console.log(mobile)
    const mobileStyle1 = {
        left: '5%',
        top: '15%',
    }

    const mobileStyle2 = {
        left: '40%',
        top: '22%',
    }

    const mobileStyle3 = {
        left: '80%',
        top: '30%',
    }

    const mobileStyle4 = {
        left: '80%',
        top: '90%',
    }

    const showPopover = (video) => {
        return (
            <iframe width="560" height="315" src={video} title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowFullScreen></iframe>
        )
    }

    return (
        <>
            <Head>
                <style>
                {`
                    main {
                        padding: 30px;
                    }

                    .paths {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        margin-bottom: 50px;
                        position: absolute;
                    }

                    .start_path_avatar {
                        background-color: #FADDBE !important;
                    }

                    .second_path {
                        position: absolute;
                        left : 
                    }

                    .second_path_avatar, .third_path_avatar, .fourth_path_avatar {
                        background-color: #426166 !important;
                    }
                `}
                </style>
            </Head>

            <MainLayout>
                <main>
                    <h1 style={{ position: 'relative' }}>ALUR PENGOLAHAN PRODUK SUSU ETAWA</h1>

                    <div 
                        className="paths start_path" 
                        style={mobileStyle1} 
                    >

                        <Popover content={() => showPopover('https://www.youtube.com/embed/dQw4w9WgXcQ?si=jJ0KN1WFeSi3_h9K')}>
                            <Avatar 
                                size={!mobile ? 128 : 64} 
                                className="start_path_avatar" />
                        </Popover>
                    </div>


                    <div className="paths second_path" style={mobileStyle2}>
                        <Popover content={() => showPopover('www.youtube.com')}>
                            <Avatar size={!mobile ? 128 : 64}  className="second_path_avatar"/>
                            <p>PEMELIHARAAN KAMBING</p>
                        </Popover>
                    </div>

                    <div className="paths third_path" style={mobileStyle3}>
                        <Popover content={() => showPopover('www.youtube.com')}>
                            <Avatar size={!mobile ? 128 : 64}  className="third_path_avatar"/>
                            <p>PEMERAHAN SUSU</p>
                        </Popover>
                    </div>

                    <div className="paths fourth_path" style={mobileStyle4}>
                        <Popover content={() => showPopover('www.youtube.com')}>
                            <Avatar size={!mobile ? 128 : 64}  className="fourth_path_avatar"/>
                            <p>PENGOLAHAN SUSU</p>
                        </Popover>
                    </div>
                </main>
            </MainLayout>
        </>
    )
}
