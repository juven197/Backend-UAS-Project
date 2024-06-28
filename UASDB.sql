--
-- PostgreSQL database dump
--

-- Dumped from database version 16.3
-- Dumped by pg_dump version 16.3

-- Started on 2024-06-28 10:38:31

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 222 (class 1259 OID 16431)
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 16430)
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.failed_jobs_id_seq OWNER TO postgres;

--
-- TOC entry 4915 (class 0 OID 0)
-- Dependencies: 221
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- TOC entry 228 (class 1259 OID 16462)
-- Name: games; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.games (
    id bigint NOT NULL,
    title character varying(255) NOT NULL,
    description text NOT NULL,
    genre_id bigint,
    price integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    image character varying(255) NOT NULL
);


ALTER TABLE public.games OWNER TO postgres;

--
-- TOC entry 227 (class 1259 OID 16461)
-- Name: games_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.games_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.games_id_seq OWNER TO postgres;

--
-- TOC entry 4916 (class 0 OID 0)
-- Dependencies: 227
-- Name: games_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.games_id_seq OWNED BY public.games.id;


--
-- TOC entry 226 (class 1259 OID 16455)
-- Name: genres; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.genres (
    id bigint NOT NULL,
    title character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.genres OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 16454)
-- Name: genres_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.genres_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.genres_id_seq OWNER TO postgres;

--
-- TOC entry 4917 (class 0 OID 0)
-- Dependencies: 225
-- Name: genres_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.genres_id_seq OWNED BY public.genres.id;


--
-- TOC entry 216 (class 1259 OID 16400)
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 16399)
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.migrations_id_seq OWNER TO postgres;

--
-- TOC entry 4918 (class 0 OID 0)
-- Dependencies: 215
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- TOC entry 219 (class 1259 OID 16417)
-- Name: password_reset_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_reset_tokens OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 16424)
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 16443)
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 16442)
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.personal_access_tokens_id_seq OWNER TO postgres;

--
-- TOC entry 4919 (class 0 OID 0)
-- Dependencies: 223
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- TOC entry 218 (class 1259 OID 16407)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    is_admin boolean DEFAULT false NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 16406)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 4920 (class 0 OID 0)
-- Dependencies: 217
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 4724 (class 2604 OID 16434)
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- TOC entry 4728 (class 2604 OID 16465)
-- Name: games id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.games ALTER COLUMN id SET DEFAULT nextval('public.games_id_seq'::regclass);


--
-- TOC entry 4727 (class 2604 OID 16458)
-- Name: genres id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.genres ALTER COLUMN id SET DEFAULT nextval('public.genres_id_seq'::regclass);


--
-- TOC entry 4721 (class 2604 OID 16403)
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- TOC entry 4726 (class 2604 OID 16446)
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- TOC entry 4722 (class 2604 OID 16410)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 4903 (class 0 OID 16431)
-- Dependencies: 222
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- TOC entry 4909 (class 0 OID 16462)
-- Dependencies: 228
-- Data for Name: games; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.games (id, title, description, genre_id, price, created_at, updated_at, image) FROM stdin;
3	Terraria	Dig, fight, explore, and build in this action-packed adventure game. The entire world is your canvas, and the ground itself is your paint. Create weapons to fight various enemies in different biomes, mine for treasures, and collect resources to craft everything you need. Build your own home, fortress, or castle where NPCs can move in and sell you useful items for your journey.	1	299	2024-06-27 04:19:18	2024-06-27 14:34:14	1719498854.jpg
4	RESIDENT EVIL 7	Set in a decaying farmhouse in America's South, this survival horror game introduces a new 'isolated camera' perspective for a more immersive experience. The RE Engine pushes the limits of horror, making the experience more realistic and terrifying.	11	399	2024-06-27 04:19:18	2024-06-27 14:34:31	1719498871.jpg
5	Ghost of Tsushima DIRECTOR'S CUT	Set in the late 13th century, the Mongol Empire is ravaging nations in its quest to conquer the East. The island of Tsushima is the last line of defense, with Jin Sakai, a samurai, as its lone survivor. Jin must abandon his samurai traditions and embrace a new way to fight, becoming the Ghost to save his people and home.	3	4799	2024-06-27 04:19:18	2024-06-27 14:34:59	1719498899.jpg
6	Cyberpunk 2077	This open-world RPG set in a dark future tells the story of V, a cyberpunk mercenary struggling to survive in Night City. Create your character, choose your play style, and make choices that influence the world and story. This enhanced version includes new content and visual improvements.	1	3399	2024-06-27 04:19:18	2024-06-27 14:35:16	1719498916.jpg
7	HELLDIVERS 2	Join the fight for freedom in this action-packed third-person shooter. Play in squads of up to four Helldivers, completing strategic missions across the hostile galaxy. Teamwork is crucial, as friendly fire is a constant threat.	14	3399	2024-06-27 04:19:18	2024-06-27 14:35:34	1719498934.jpg
8	Lethal Company	Work for a company contracted to collect scrap from abandoned industrial moons. Use your earnings to explore riskier moons for higher rewards or to buy stylish outfits and ship decorations. Scan creatures you find and add them to your bestiary while navigating the dangers and mysteries of these environments.	12	489	2024-06-27 04:19:18	2024-06-27 14:35:50	1719498950.jpg
9	Sid Meier’s Civilization VI	Created by legendary designer Sid Meier, this turn-based strategy game challenges you to build an empire that stands the test of time. Lead a civilization from the Stone Age to the Information Age, engage in diplomacy, cultural development, and war to become the greatest ruler in history. The game offers new ways to interact with the world, expanded cities, active research, dynamic diplomacy, and combined arms units.	10	499	2024-06-27 04:19:18	2024-06-27 14:36:03	1719498963.jpg
10	Resident Evil 4	Six years after the biological disaster in Raccoon City, agent Leon S. Kennedy is sent to rescue the kidnapped daughter of the president. His search leads him to a mysterious European village where something is terribly wrong with the locals. Experience the updated gameplay, reimagined storyline, and highly detailed graphics in this revitalized classic survival horror game.	11	2499	2024-06-27 04:19:18	2024-06-27 14:36:21	1719498981.png
11	Satisfactory	A first-person open-world factory building game focusing on exploration and combat. Play alone or with friends, build sprawling factories, and automate production to achieve efficiency. Explore an alien planet, gather resources, and construct massive factories.	13	679	2024-06-27 04:19:18	2024-06-27 14:36:35	1719498995.jpg
12	Outlast	Set in the remote mountains of Colorado, the Mount Massive Asylum hides terrifying secrets. Independent journalist Miles Upshur ventures into the asylum following a tip, uncovering horrors that blur the line between science and religion. In this stealth game, you must run or hide to survive the nightmares within.	12	299	2024-06-27 04:19:18	2024-06-27 14:36:49	1719499009.jpg
13	Sonic Mania	Past and future collide in Sonic Mania, a 2D Sonic adventure with stunning retro-style HD graphics. Play as Sonic, Tails, and Knuckles, and race through classic zones while challenging new bosses. Play in competition mode or cooperative mode. Sonic Mania is developed by Christian Whitehead, Headcannon, and PagodaWest Games in collaboration with Sonic Team.	6	199	2024-06-27 04:19:18	2024-06-27 14:37:00	1719499020.jpg
14	Mortal Kombat 1	Mortal Kombat returns with a fresh restart, featuring a new universe created by fire god Liu Kang. This installment includes redesigned favorite characters and new fighters. The story mode is filled with high-quality cinematics. Choose a main fighter and a 'cameo' character to assist in battles. The game features updated combat systems and more dynamic finishing moves.	5	3399	2024-06-27 04:19:18	2024-06-27 14:37:16	1719499036.jpg
15	FIFA 24	EA SPORTS FC™ 24 offers a new era of the global game with over 19,000 licensed players, 700+ teams, and 30+ leagues. The game features HyperMotionV technology, gameplay styles from Opta, and the Frostbite™ engine for unmatched realism. Enjoy enhanced graphics and new customization options, as well as cross-play in Clubs and VOLTA FOOTBALL™ modes.	9	2999	2024-06-27 04:19:18	2024-06-27 14:37:31	1719499051.jpg
16	Wreckfest	Forget the rules! Wreckfest is all about full-contact racing and no-holds-barred destruction. Experience epic crashes and intense races in this realistic physics simulation from the creators of FlatOut 1 & 2. Customize and upgrade your cars for survival races and demolition derbies. Multiplayer mode lets you compete with friends online, and the career mode offers championships and challenges to become the ultimate racing champion.	8	599	2024-06-27 04:19:18	2024-06-27 14:37:44	1719499064.jpg
17	Assassin's Creed Origins	Set in ancient Egypt, this game explores the origins of the Assassin Brotherhood. Travel through a diverse landscape, from the Nile's lush banks to the scorching desert. Explore forgotten tombs and uncover secrets as you journey through this richly detailed world.	3	1999	2024-06-27 04:19:18	2024-06-27 14:37:58	1719499078.jpg
2	The Witcher 3: Wild Hunt	You play as Geralt of Rivia, a monster hunter on a quest to find Ciri, a powerful being capable of changing the world. This complete edition includes the base game with over 100 hours of open-world adventure and the story expansions 'Hearts of Stone' and 'Blood and Wine', adding another 50 hours of gameplay. It features new items from the Netflix series, a photo mode, and other updates for next-gen consoles, enhancing visuals and performance.	1	1200	2024-06-27 04:19:18	2024-06-27 14:38:13	1719499093.png
1	METAL GEAR SOLID 3: Snake Eater	This game is part of the METAL GEAR series, revealing the backstory of Naked Snake and his mentor, The Boss. Set in a dense jungle, players use new stealth techniques, camouflage, and face paint to blend in with the environment. The game also introduces new action elements like catching forest creatures for sustenance and a close-quarters combat mode (CQC) for hand-to-hand fights. Exclusive digital materials include a Screenplay Book and a Master Book detailing the game's story and characters.	14	1010	2024-06-27 04:19:18	2024-06-27 14:31:52	1719498499.jpg
\.


--
-- TOC entry 4907 (class 0 OID 16455)
-- Dependencies: 226
-- Data for Name: genres; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.genres (id, title, created_at, updated_at) FROM stdin;
1	RPG	2024-06-27 04:19:18	2024-06-27 04:19:18
2	Adventure	2024-06-27 04:19:18	2024-06-27 04:19:18
3	Action-adventure	2024-06-27 04:19:18	2024-06-27 04:19:18
4	Action	2024-06-27 04:19:18	2024-06-27 04:19:18
5	Fighting	2024-06-27 04:19:18	2024-06-27 04:19:18
6	Platform	2024-06-27 04:19:18	2024-06-27 04:19:18
7	Puzzle	2024-06-27 04:19:18	2024-06-27 04:19:18
8	Racing	2024-06-27 04:19:18	2024-06-27 04:19:18
9	Sports	2024-06-27 04:19:18	2024-06-27 04:19:18
10	Strategy	2024-06-27 04:19:18	2024-06-27 04:19:18
11	Survival horror	2024-06-27 04:19:18	2024-06-27 04:19:18
12	Horror	2024-06-27 04:19:18	2024-06-27 04:19:18
13	Simulation	2024-06-27 04:19:18	2024-06-27 04:19:18
14	Shooter	2024-06-27 04:19:18	2024-06-27 04:19:18
\.


--
-- TOC entry 4897 (class 0 OID 16400)
-- Dependencies: 216
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_reset_tokens_table	1
3	2014_10_12_100000_create_password_resets_table	1
4	2019_08_19_000000_create_failed_jobs_table	1
5	2019_12_14_000001_create_personal_access_tokens_table	1
6	2024_03_30_053309_create_genres_table	1
7	2024_03_31_052724_create_games_table	1
8	2024_04_02_164210_add_column_is_admin_to_users_table	1
9	2024_04_03_162242_add_column_image_to_games_table	1
\.


--
-- TOC entry 4900 (class 0 OID 16417)
-- Dependencies: 219
-- Data for Name: password_reset_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
\.


--
-- TOC entry 4901 (class 0 OID 16424)
-- Dependencies: 220
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- TOC entry 4905 (class 0 OID 16443)
-- Dependencies: 224
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 4899 (class 0 OID 16407)
-- Dependencies: 218
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, is_admin) FROM stdin;
2	steve	steve.carindra.150605@gmail.com	\N	$2y$10$Wg0ErAk5N4i3YJdOqSAg3.WGj0MQqAKfQtzfDLRmWlMWY2HDJbkPK	\N	2024-06-27 05:01:04	2024-06-27 05:01:04	f
1	Admin	test@gmail.com	2024-06-27 04:19:19	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	c3lgy52d5Kpo7E5F2cv9SBo42EaDY842tvsWvPLWlpoY5tcpvVV7MxfyDzp6	2024-06-27 04:19:19	2024-06-27 04:19:19	t
\.


--
-- TOC entry 4921 (class 0 OID 0)
-- Dependencies: 221
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- TOC entry 4922 (class 0 OID 0)
-- Dependencies: 227
-- Name: games_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.games_id_seq', 17, true);


--
-- TOC entry 4923 (class 0 OID 0)
-- Dependencies: 225
-- Name: genres_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.genres_id_seq', 14, true);


--
-- TOC entry 4924 (class 0 OID 0)
-- Dependencies: 215
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 9, true);


--
-- TOC entry 4925 (class 0 OID 0)
-- Dependencies: 223
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- TOC entry 4926 (class 0 OID 0)
-- Dependencies: 217
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 2, true);


--
-- TOC entry 4739 (class 2606 OID 16439)
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- TOC entry 4741 (class 2606 OID 16441)
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- TOC entry 4751 (class 2606 OID 16469)
-- Name: games games_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.games
    ADD CONSTRAINT games_pkey PRIMARY KEY (id);


--
-- TOC entry 4748 (class 2606 OID 16460)
-- Name: genres genres_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.genres
    ADD CONSTRAINT genres_pkey PRIMARY KEY (id);


--
-- TOC entry 4730 (class 2606 OID 16405)
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- TOC entry 4736 (class 2606 OID 16423)
-- Name: password_reset_tokens password_reset_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);


--
-- TOC entry 4743 (class 2606 OID 16450)
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- TOC entry 4745 (class 2606 OID 16453)
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- TOC entry 4732 (class 2606 OID 16416)
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- TOC entry 4734 (class 2606 OID 16414)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 4749 (class 1259 OID 16470)
-- Name: game_genre_idx; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX game_genre_idx ON public.games USING btree (genre_id);


--
-- TOC entry 4737 (class 1259 OID 16429)
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- TOC entry 4746 (class 1259 OID 16451)
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- TOC entry 4752 (class 2606 OID 16471)
-- Name: games game_genre_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.games
    ADD CONSTRAINT game_genre_fk FOREIGN KEY (genre_id) REFERENCES public.genres(id);


-- Completed on 2024-06-28 10:38:31

--
-- PostgreSQL database dump complete
--

