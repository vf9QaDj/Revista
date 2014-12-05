--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: admins; Type: TABLE; Schema: public; Owner: henry; Tablespace: 
--

CREATE TABLE admins (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    username character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(255),
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE public.admins OWNER TO henry;

--
-- Name: admins_id_seq; Type: SEQUENCE; Schema: public; Owner: henry
--

CREATE SEQUENCE admins_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.admins_id_seq OWNER TO henry;

--
-- Name: admins_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: henry
--

ALTER SEQUENCE admins_id_seq OWNED BY admins.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: henry; Tablespace: 
--

CREATE TABLE migrations (
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO henry;

--
-- Name: posts; Type: TABLE; Schema: public; Owner: henry; Tablespace: 
--

CREATE TABLE posts (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    content text NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE public.posts OWNER TO henry;

--
-- Name: posts_id_seq; Type: SEQUENCE; Schema: public; Owner: henry
--

CREATE SEQUENCE posts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.posts_id_seq OWNER TO henry;

--
-- Name: posts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: henry
--

ALTER SEQUENCE posts_id_seq OWNED BY posts.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: henry; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    username character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(255),
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE public.users OWNER TO henry;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: henry
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO henry;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: henry
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: henry
--

ALTER TABLE ONLY admins ALTER COLUMN id SET DEFAULT nextval('admins_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: henry
--

ALTER TABLE ONLY posts ALTER COLUMN id SET DEFAULT nextval('posts_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: henry
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: admins; Type: TABLE DATA; Schema: public; Owner: henry
--

COPY admins (id, name, username, email, password, remember_token, created_at, updated_at) FROM stdin;
1	Administrator	admin	admin@admin.com	$2y$10$7QVZbjaz16RMsEvJrpcDr.WA3maCyJ3fykzv.l216kVq.yT13dUC2	R7zXh5ETzYMBP5nQNd26mplyzZDLiAZd0e8Nu6AjXCuzNAjk1bRXb3T7kZ0j	2014-12-05 03:21:28	2014-12-05 03:36:43
\.


--
-- Name: admins_id_seq; Type: SEQUENCE SET; Schema: public; Owner: henry
--

SELECT pg_catalog.setval('admins_id_seq', 1, true);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: henry
--

COPY migrations (migration, batch) FROM stdin;
2014_10_21_135044_create_users_table	1
2014_10_30_142944_create_post_table	1
2014_12_05_015855_create_admins_table	1
\.


--
-- Data for Name: posts; Type: TABLE DATA; Schema: public; Owner: henry
--

COPY posts (id, title, content, created_at, updated_at) FROM stdin;
1	Creador de Facebook...	Mark Zuckeberg habló...	2014-12-05 03:21:28	2014-12-05 03:21:28
2	Google rediseña la...	Se implementaron algunos...	2014-12-05 03:21:28	2014-12-05 03:21:28
3	Se filtran fotos y...	El teléfono será presentado...	2014-12-05 03:21:28	2014-12-05 03:21:28
\.


--
-- Name: posts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: henry
--

SELECT pg_catalog.setval('posts_id_seq', 3, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: henry
--

COPY users (id, name, username, email, password, remember_token, created_at, updated_at) FROM stdin;
1	Usuario	user	user@user.com	$2y$10$63.G8UHuFdr8gN3SKlENJuOzD899V0K62Cb8Mq2YBp1rAt08hwbWG	\N	2014-12-05 03:21:28	2014-12-05 03:21:28
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: henry
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


--
-- Name: admins_email_unique; Type: CONSTRAINT; Schema: public; Owner: henry; Tablespace: 
--

ALTER TABLE ONLY admins
    ADD CONSTRAINT admins_email_unique UNIQUE (email);


--
-- Name: admins_pkey; Type: CONSTRAINT; Schema: public; Owner: henry; Tablespace: 
--

ALTER TABLE ONLY admins
    ADD CONSTRAINT admins_pkey PRIMARY KEY (id);


--
-- Name: admins_username_unique; Type: CONSTRAINT; Schema: public; Owner: henry; Tablespace: 
--

ALTER TABLE ONLY admins
    ADD CONSTRAINT admins_username_unique UNIQUE (username);


--
-- Name: posts_pkey; Type: CONSTRAINT; Schema: public; Owner: henry; Tablespace: 
--

ALTER TABLE ONLY posts
    ADD CONSTRAINT posts_pkey PRIMARY KEY (id);


--
-- Name: users_email_unique; Type: CONSTRAINT; Schema: public; Owner: henry; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: henry; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: users_username_unique; Type: CONSTRAINT; Schema: public; Owner: henry; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_username_unique UNIQUE (username);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

