/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
// imported -----------------------------------------------------------------------------
import { InnerBlocks, InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, SelectControl } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const { animation } = attributes;
	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Settings', 'animate-on-scroll' ) }>
					<SelectControl
						label={ __( 'Animation', 'animate-on-scroll' ) }
						value={ animation }
						options={[
							{ label: __( 'Fade Up', 'animate-on-scroll' ), value: 'fade-up' },
							{ label: __( 'Fade Down', 'animate-on-scroll' ), value: 'fade-down' },
							{ label: __( 'Fade Left', 'animate-on-scroll' ), value: 'fade-left' },
							{ label: __( 'Fade Right', 'animate-on-scroll' ), value: 'fade-right' },
							{ label: __( 'Zoom In', 'animate-on-scroll' ), value: 'zoom-in' },
						]}
						onChange={ ( newAnimation ) => {
							setAttributes( { animation: newAnimation } );
						} }
					/>
				</PanelBody>
			</InspectorControls>
			<div 
				{ ...useBlockProps() }
				data-aos={ animation }
				>
					<InnerBlocks/>
			</div>
		</>
	);
}
